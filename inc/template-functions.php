<?php
/**
 * @package Bizkorp
 */

//Get theme options
if ( ! function_exists( 'bizkorp_option' ) ) {
	function bizkorp_option( $option = '', $default = null ) {
		$defaults = bizkorp_default_theme_options();
		$options  = get_option( 'bizkorp_theme_options' );
		$default  = ( ! isset( $default ) && isset( $defaults[ $option ] ) ) ? $defaults[ $option ] : $default;

		return ( isset( $options[ $option ] ) ) ? $options[ $option ] : $default;
	}
}

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

/**
 * Adds custom classes to the array of body classes.
 */
function bizkorp_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if ( class_exists( 'WooCommerce' ) ) {
		$classes[] = 'bizkorp-woo-active';
	}else{
		$classes[] = 'bizkorp-woo-deactivate';
	}

	//Check Elementor Page Builder Used or not
	$elementor_used = get_post_meta(get_the_ID(), '_elementor_edit_mode', true);

	if(is_archive() || is_search()){
		$classes[]        = !!$elementor_used ? 'page-builder-not-used' : 'page-builder-not-used';
	}else{
		$classes[]        = !!$elementor_used ? 'page-builder-used' : 'page-builder-not-used';
	}

	return $classes;
}
add_filter( 'body_class', 'bizkorp_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function bizkorp_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'bizkorp_pingback_header' );

/**
 * Words limit
 */
function bizkorp_words_limit($text, $limit) {
	$words = explode(' ', $text, ($limit + 1));

	if (count($words) > $limit) {
		array_pop($words);
	}

	return implode(' ', $words);
}

/*
 * Change WordPress Default Excerpt Length.
 */
function bizkorp_custom_excerpt_lengh( $length ) {
	return 500;
}
add_filter( 'excerpt_length', 'bizkorp_custom_excerpt_lengh',0 );

/**
 * Get excluded sidebar list
 */
if( ! function_exists( 'bizkorp_sidebars' ) ) {
	function bizkorp_sidebars() {
		$default = esc_html__('Default', 'bizkorp');
		$options = array($default);
		// set ids of the registered sidebars for exclude
		$exclude = array( 'bizkorp-footer-widget' );

		global $wp_registered_sidebars;

		if( ! empty( $wp_registered_sidebars ) ) {
			foreach( $wp_registered_sidebars as $sidebar ) {
				if( ! in_array( $sidebar['id'], $exclude ) ) {
					$options[$sidebar['id']] = $sidebar['name'];
				}
			}
		}

		return $options;
	}
}


/**
 * Iframe embed
 */

function bizkorp_iframe_embed( $tags, $context ) {
	if ( 'post' === $context ) {
		$tags['iframe'] = array(
			'src'             => true,
			'height'          => true,
			'width'           => true,
			'frameborder'     => true,
			'allowfullscreen' => true,
		);
	}
	return $tags;
}
add_filter( 'wp_kses_allowed_html', 'bizkorp_iframe_embed', 10, 2 );

/**
 * Allow Html
 */
if ( !function_exists( 'bizkorp_allow_html' ) ) {
	function bizkorp_allow_html(){
		return array(
			'a'      => array(
				'href'   => array(),
				'target' => array(),
				'title'  => array(),
				'rel'    => array(),
				'class'    => array(),
			),
			'ul' => array(),
			'li' => array(),
			'strong' => array(),
			'small'  => array(),
			'span'   => array(
			        'style' => array(),
			        'class' => array(),
            ),
			'p'      => array(),
			'br'     => array(),
			'img'    => array(
				'src'    => array(),
				'title'  => array(),
				'alt'    => array(),
				'width'  => array(),
				'height' => array(),
				'class'  => array(),
			),
			'h1'     => array(),
			'h2'     => array(),
			'h3'     => array(),
			'h4'     => array(),
			'h5'     => array(),
			'h6'     => array(),
		);
    }
}

/**
 * Check if a post is a custom post type.
 *
 * @param mixed $post Post object or ID
 *
 * @return boolean
 */
function bizkorp_custom_post_types( $post = null ) {
	$custom_post_list = get_post_types( array( '_builtin' => false ) );

	// there are no custom post types
	if ( empty ( $custom_post_list ) ) {
		return false;
	}

	$custom_types     = array_keys( $custom_post_list );
	$current_post_type = get_post_type( $post );

	// could not detect current type
	if ( ! $current_post_type ) {
		return false;
	}

	return in_array( $current_post_type, $custom_types );
}


/**
 * Add span tag in archive list count number
 */
function bizkorp_add_span_archive_count($links) {
	$links = str_replace('</a>&nbsp;(', '</a> <span class="post-count-number">(', $links);
	$links = str_replace(')', ')</span>', $links);
	return $links;
}

add_filter('get_archives_link', 'bizkorp_add_span_archive_count');


/**
 * Add span tag in category list count number
 */

function bizkorp_add_span_category_count($links) {
	$links = str_replace('</a> (', '</a> <span class="post-count-number">(', $links);
	$links = str_replace(')', ')</span>', $links);
	return $links;
}

add_filter('wp_list_categories', 'bizkorp_add_span_category_count');

/**
 * Prints HTML with meta information for the current post-date/time.
 */
if ( ! function_exists( 'bizkorp_posted_on' ) ) :

	function bizkorp_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
		/* translators: %s: post date. */
			esc_html_x( ' %s', 'post date', 'bizkorp' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on"><i class="far fa-calendar-check"></i>' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;


/**
 * Prints HTML with meta information for the current author.
 */
if ( ! function_exists( 'bizkorp_posted_by' ) ) :

	function bizkorp_posted_by() {
		$byline = sprintf(
		/* translators: %s: post author. */
			esc_html_x( ' %s', 'post author', 'bizkorp' ),
			'<span class="author vcard">' . esc_html( get_the_author() ) . '</span>'
		);

		echo '<span class="byline"><i class="far fa-user"></i> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

/**
 * Prints HTML with meta information for the tags.
 */
if ( ! function_exists( 'bizkorp_post_tags' ) ) :

	function bizkorp_post_tags() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list('', esc_html_x('', 'list item separator', 'bizkorp'));
			if ($tags_list) {
				/* translators: 1: list of tags. */
				printf('<span class="tags-links"><span class="tag-title">' .esc_html__('Tags:','bizkorp').'</span>' .esc_html__(' %1$s', 'bizkorp') . '</span>', $tags_list); // WPCS: XSS OK.


			}

		}
	}
endif;

/**
 * Prints HTML with meta information for the categories.
 */

if ( ! function_exists( 'bizkorp_post_categories' ) ) :

	function bizkorp_post_categories() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {

			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list(esc_html__(', ', 'bizkorp'));
			if ($categories_list) {
				/* translators: 1: list of categories. */
				printf('<span class="cat-links"><i class="far fa-folder"></i>' . esc_html__('%1$s', 'bizkorp') . '</span>', $categories_list); // WPCS: XSS OK.
			}

		}
	}
endif;

/**
 * Prints post's first category
 */

if ( ! function_exists( 'bizkorp_post_first_category' ) ) :

	function bizkorp_post_first_category(){

		$post_category_list = get_the_terms(get_the_ID(), 'category');

		$post_first_category = $post_category_list[0];
		if ( ! empty( $post_first_category->slug )) {
			echo '<span class="cat-links"><i class="far fa-folder"></i><a href="'.get_term_link( $post_first_category->slug, 'category' ).'">' . $post_first_category->name . '</a></span>';
		}

	}
endif;

/**
 * Prints HTML with meta information for the comments.
 */
if ( ! function_exists( 'bizkorp_comment_count' ) ) :

	function bizkorp_comment_count() {
		if ( ! post_password_required() && ( comments_open() || get_comments_number() ) && get_comments_number() != 0) {
			echo '<span class="comments-link"><i class="far fa-comments"></i>';
			comments_popup_link('', ''.esc_html__('1', 'bizkorp').' <span class="comment-count-text">'.esc_html__('Comment', 'bizkorp').'</span>', '% <span class="comment-count-text">'.esc_html__('Comments', 'bizkorp').'</span>');
			echo '</span>';
		}
	}
endif;


/*
 * Post Load More
 */

if(!function_exists('bizkorp_load_more_button')){
	function bizkorp_load_more_button() {
        global $wp_query;
        if (  $wp_query->max_num_pages > 1 ) {
            echo '<a href="javascript:void(0);" id="td-load-more-post" class="loadMore td-button"><span class="text">' . esc_html__( 'Load More Posts', 'bizkorp' ) . '</span><span class="spinner"></span></a>';
        }
	}
}

function bizkorp_loadmore_ajax_handler() {
	// Verify nonce
	check_ajax_referer('bizkorp_ajax_nonce', 'nonce');

	// Sanitize and decode the query vars JSON
	$query_vars_json = isset($_POST['query']) ? wp_unslash($_POST['query']) : '';
	$query_vars_array = json_decode($query_vars_json, true);

	if (!is_array($query_vars_array)) {
		wp_die(); // stop if query data isn't valid
	}

	// Sanitize each query var
	$sanitized_query_vars = array();
	foreach ($query_vars_array as $key => $value) {
		$key = sanitize_key($key);
		if (is_array($value)) {
			$sanitized_query_vars[$key] = array_map('sanitize_text_field', $value);
		} elseif (is_scalar($value)) {
			$sanitized_query_vars[$key] = sanitize_text_field($value);
		}
	}

	// Sanitize and increment the page number
	$page = isset($_POST['page']) ? absint($_POST['page']) + 1 : 1;
	$sanitized_query_vars['paged'] = $page;
	$sanitized_query_vars['post_status'] = 'publish';

	// Run the query
	$query = new WP_Query($sanitized_query_vars);

	if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post();
			get_template_part('template-parts/post/post-item-wrapper');
		endwhile;
	endif;

	wp_die();
}

add_action('wp_ajax_loadmore', 'bizkorp_loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'bizkorp_loadmore_ajax_handler');

remove_action( 'wp_head', 'wp_print_auto_sizes_contain_css_fix', 1 );
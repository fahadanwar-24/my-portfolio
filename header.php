<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bizkorp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php
	if (is_page() || is_singular( 'post' ) || bizkorp_custom_post_types() && get_post_meta( $post->ID, 'bizkorp_common_meta', true ) ) {
		$common_meta = get_post_meta( $post->ID, 'bizkorp_common_meta', true );
	} else {
		$common_meta = array();
	}

	if ( is_array( $common_meta ) && array_key_exists( 'header_style_meta', $common_meta ) && $common_meta['header_style_meta'] != '' && $common_meta['header_style_meta'] != 'default' ) {
		$header_query = new WP_Query( [
			'post_type'      => 'bizkorp_header',
			'posts_per_page' => -1,
			'p'              => $common_meta['header_style_meta'],
		] );

	} elseif(!empty(bizkorp_option('site_default_header'))){
		$header_query = new WP_Query( [
			'post_type'      => 'bizkorp_header',
			'posts_per_page' => -1,
			'p'              => bizkorp_option('site_default_header'),
		] );
	}else{
		$header_query = '';
	}

	$preloader    = bizkorp_option( 'enable_preloader', true );
	$custom_cursor    = bizkorp_option( 'enable_custom_cursor', false );

	wp_head();
	?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <?php if ($custom_cursor == true) :?>
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <?php endif; ?>

	<?php if($preloader == true) {
		get_template_part( 'template-parts/preloader/preloader-one' );
	}?>

	<?php if (!empty($header_query) && $header_query->have_posts()): ?>
		<?php
		while ($header_query->have_posts()) : $header_query->the_post();
			the_content();
		endwhile;
		wp_reset_postdata();
		?>
	<?php else: ?>
        <div class="mobile-menu-container">
            <div class="mobile-menu-close"></div>
            <div id="mobile-menu-wrap"></div>
        </div>
        <header class="header-area site-header">
			<?php get_template_part('template-parts/header/default-header-style'); ?>
        </header>
	<?php endif; ?>

    <div id="content" class="site-content">
        
<?php

// Create blog page options
CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Blog Page Settings', 'bizkorp' ),
	'id'     => 'blog_page_options',
	'icon'   => 'fa fa-pencil-square-o',
	'fields' => array(

		array(
			'id'      => 'blog_layout',
			'type'    => 'select',
			'title'   => esc_html__( 'Blog Layout', 'bizkorp' ),
			'options' => array(
				'full-width'    => esc_html__( 'Full Width', 'bizkorp' ),
				'list-view'     => esc_html__( 'List View', 'bizkorp' ),
				'left-sidebar'  => esc_html__( 'Left Sidebar', 'bizkorp' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'bizkorp' ),
				'two-column'    => esc_html__( '2 Column', 'bizkorp' ),
				'grid-ls'       => esc_html__( '2 Column Left Sidebar', 'bizkorp' ),
				'grid-rs'       => esc_html__( '2 Column Right Sidebar', 'bizkorp' ),
				'grid'          => esc_html__( '3 Column', 'bizkorp' ),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__( 'Select blog page layout.', 'bizkorp' ),
		),

		array(
			'id'       => 'blog_banner',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Blog Banner', 'bizkorp' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'bizkorp' ),
			'text_off' => esc_html__( 'No', 'bizkorp' ),
			'desc'     => esc_html__( 'Enable or disable blog page banner.', 'bizkorp' ),
		),

		array(
			'id'                    => 'blog_banner_background_options',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Banner Background', 'bizkorp' ),
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size'       => false,
			'background_position'   => false,
			'background_repeat'     => false,
			'dependency'            => array( 'blog_banner', '==', true ),
			'output'                => '.banner-area.blog-banner',
			'desc'                  => esc_html__( 'If you want different banner background settings for blog page then select blog page banner background Options from here.', 'bizkorp' ),
		),

		array(
			'id'       => 'enable_blog_banner_title',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Banner Title', 'bizkorp' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'bizkorp' ),
			'text_off' => esc_html__( 'No', 'bizkorp' ),
			'desc'     => esc_html__( 'Hide / Show blog banner title.', 'bizkorp' ),
			'dependency' => array( 'blog_banner', '==', true ),
		),

		array(
			'id'         => 'blog_title',
			'type'       => 'text',
			'title'      => esc_html__( 'Banner Title', 'bizkorp' ),
			'desc'       => esc_html__( 'Type blog banner title here.', 'bizkorp' ),
			'dependency' => array( 'blog_banner|enable_blog_banner_title', '==|==', 'true|true' ),
		),

		array(
			'id'       => 'enable_blog_banner_breadcrumb',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Banner Breadcrumb', 'bizkorp' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'bizkorp' ),
			'text_off' => esc_html__( 'No', 'bizkorp' ),
			'desc'     => esc_html__( 'Hide / Show blog banner title.', 'bizkorp' ),
			'dependency' => array( 'blog_banner', '==', true ),
		),


		array(
			'id'         => 'post_title_tag',
			'type'       => 'button_set',
			'title'      => esc_html__( 'Post Title Tag', 'bizkorp' ),
			'options'    => array(
				'h1'   => esc_html__( 'H1', 'bizkorp' ),
				'h2'   => esc_html__( 'H2', 'bizkorp' ),
				'h3'   => esc_html__( 'H3', 'bizkorp' ),
				'h4'   => esc_html__( 'H4', 'bizkorp' ),
				'h5'   => esc_html__( 'H5', 'bizkorp' ),
				'h6'   => esc_html__( 'H6', 'bizkorp' ),
			),
			'default'    => 'h3',
			'desc'       => esc_html__( 'Select post title tag.', 'bizkorp' ),
		),

		array(
			'id'       => 'featured_image_link',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Featured Image Link', 'bizkorp'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Enable / Disable Post featured image link.', 'bizkorp'),
		),

		array(
			'id'       => 'post_author',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Show Author Name', 'bizkorp' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'bizkorp' ),
			'text_off' => esc_html__( 'No', 'bizkorp' ),
			'desc'     => esc_html__( 'Hide / Show post author name.', 'bizkorp' ),
		),

		array(
			'id'       => 'post_date',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Show Post Date', 'bizkorp' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'bizkorp' ),
			'text_off' => esc_html__( 'No', 'bizkorp' ),
			'desc'     => esc_html__( 'Hide / Show post date.', 'bizkorp' ),
		),

		array(
			'id'         => 'cmnt_number',
			'type'       => 'switcher',
			'title'      => esc_html__( 'Show Comment Number', 'bizkorp' ),
			'default'    => true,
			'text_on'    => esc_html__( 'Yes', 'bizkorp' ),
			'text_off'   => esc_html__( 'No', 'bizkorp' ),
			'desc'       => esc_html__( 'Hide / Show post comment number.', 'bizkorp' ),
		),

		array(
			'id'         => 'show_category',
			'type'       => 'switcher',
			'title'      => esc_html__( 'Show Category Name', 'bizkorp' ),
			'default'    => true,
			'text_on'    => esc_html__( 'Yes', 'bizkorp' ),
			'text_off'   => esc_html__( 'No', 'bizkorp' ),
			'desc'       => esc_html__( 'Hide / Show post category name.', 'bizkorp' ),
		),

		array(
			'id'         => 'show_excerpt',
			'type'       => 'switcher',
			'title'      => esc_html__( 'Show Excerpt', 'bizkorp' ),
			'default'    => true,
			'text_on'    => esc_html__( 'Yes', 'bizkorp' ),
			'text_off'   => esc_html__( 'No', 'bizkorp' ),
			'desc'       => esc_html__( 'Hide / Show post excerpt.', 'bizkorp' ),
		),

		array(
			'id'    => 'excerpt_length',
			'type'  => 'slider',
			'title' => esc_html__( 'Excerpt Length', 'bizkorp' ),
			'desc'       => esc_html__( 'Excerpt word count.', 'bizkorp' ),
			'min'     => 1,
			'max'     => 500,
			'class'     => 'excerpt-length-slider',
			'dependency' => array( 'show_excerpt', '==', 'true' ),
		),

		array(
			'id'       => 'read_more_button',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Show Read More Button', 'bizkorp' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'bizkorp' ),
			'text_off' => esc_html__( 'No', 'bizkorp' ),
			'desc'     => esc_html__( 'Hide / Show post read more button.', 'bizkorp' ),
		),

		array(
			'id'         => 'blog_read_more_text',
			'type'       => 'text',
			'title'      => esc_html__( 'Read More Button Text', 'bizkorp' ),
			'desc'       => esc_html__( 'Type blog read more button here.', 'bizkorp' ),
			'dependency' => array( 'read_more_button', '==', true ),
		),

		array(
			'id'      => 'blog_pagination_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Pagination Type', 'bizkorp' ),
			'options' => array(
				'numeric'   => esc_html__( 'Numeric', 'bizkorp' ),
				'load-more' => esc_html__( 'Load More', 'bizkorp' ),
			),
			'default' => 'numeric',
			'desc'    => esc_html__( 'Select post pagination type.', 'bizkorp' ),
		),

		array(
			'id'      => 'pagination_align',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Pagination Align', 'bizkorp' ),
			'options' => array(
				'text-start'   => esc_html__( 'Left', 'bizkorp' ),
				'text-center' => esc_html__( 'Center', 'bizkorp' ),
				'text-end' => esc_html__( 'Right', 'bizkorp' ),
			),
			'desc'    => esc_html__( 'Select post pagination align.', 'bizkorp' ),
		),
	)
) );
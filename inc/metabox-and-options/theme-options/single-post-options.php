<?php
//Single Post

CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Single Post / Post Details', 'bizkorp' ),
	'id'     => 'single_post_options',
	'icon'   => 'fa fa-pencil',
	'fields' => array(

		array(
			'id'      => 'single_post_default_layout',
			'type'    => 'select',
			'title'   => esc_html__( 'Layout', 'bizkorp' ),
			'options' => array(
				'left-sidebar'  => esc_html__( 'Left Sidebar', 'bizkorp' ),
				'full-width'    => esc_html__( 'Full Width', 'bizkorp' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'bizkorp' ),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__( 'Select single post layout', 'bizkorp' ),
		),


		array(
			'id'         => 'single_post_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'bizkorp' ),
			'options'    => 'bizkorp_sidebars',
			'default' => 'bizkorp-sidebar',
			'dependency' => array( 'single_post_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all posts. You can override this settings on individual post.', 'bizkorp' ),
		),

		array(
			'id'      => 'hide_single_post_banner_title',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Hide Post Banner Title', 'bizkorp' ),
			'options' => array(
				'yes' => esc_html__( 'Yes', 'bizkorp' ),
				'no'  => esc_html__( 'No', 'bizkorp' ),
			),
			'default' => 'no',
			'desc'    => esc_html__( 'Hide banner title. You can change this settings on individual post.', 'bizkorp' ),
		),

		array(
			'id'       => 'show_post_default_title',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Title On Banner?', 'bizkorp'),
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Show post title on single post banner area.', 'bizkorp'),
			'default'  => true,
			'dependency' => array( 'hide_single_post_banner_title', '==', 'no' ),
		),

		array(
			'id'         => 'post_banner_title',
			'type'       => 'text',
			'title'      => esc_html__('Banner Default Title', 'bizkorp'),
			'desc'       => esc_html__('Default banner title for all post.', 'bizkorp'),
			'dependency' => array( 'show_post_default_title|hide_single_post_banner_title', '==|==', 'false|no' ),
		),

		array(
			'id'      => 'hide_single_post_breadcrumb',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Hide Post Breadcrumb', 'bizkorp' ),
			'options' => array(
				'yes' => esc_html__( 'Yes', 'bizkorp' ),
				'no'  => esc_html__( 'No', 'bizkorp' ),
			),
			'default' => 'yes',
			'desc'    => esc_html__( 'Show / Hide Post breadcrumb. You can change this settings on individual post.', 'bizkorp' ),
		),

		array(
			'id'       => 'single_post_author',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Author Name', 'bizkorp'),
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Hide or show author name on post details page.', 'bizkorp'),
			'default'  => true
		),

		array(
			'id'       => 'single_post_date',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Date', 'bizkorp'),
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Hide or show date on post details page.', 'bizkorp'),
			'default'  => true
		),

		array(
			'id'       => 'single_post_cmnt',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Comments Number', 'bizkorp'),
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Hide or show comments number on post details page.', 'bizkorp'),
			'default'  => true,
		),

		array(
			'id'       => 'single_post_cat',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Categories', 'bizkorp'),
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Hide or show categories on post details page.', 'bizkorp'),
			'default'  => true
		),

		array(
			'id'       => 'single_post_tag',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Tags', 'bizkorp'),
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Hide or show tags on post details page.', 'bizkorp'),
			'default'  => true
		),

		array(
			'id'       => 'post_share',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Share icons', 'bizkorp'),
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Hide or show social share icons on post details page.', 'bizkorp'),
			'default'  => true
		),

		array(
			'id'       => 'enable_related_post',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Related Post', 'bizkorp'),
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Enable or disable related post.', 'bizkorp'),
			'default'  => false,
		),

		array(
			'id'         => 'related_post_title',
			'type'       => 'text',
			'title'      => esc_html__('Related Post Title', 'bizkorp'),
			'desc'       => esc_html__('Related post default title.', 'bizkorp'),
			'default'       => esc_html__('Related Posts', 'bizkorp'),
			'dependency' => array( 'enable_related_post', '==', 'true' ),
		),
	)
) );
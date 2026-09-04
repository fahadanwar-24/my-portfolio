<?php
$bizkorp_common_meta = 'bizkorp_common_meta';

// Create a metabox
CSF::createMetabox( $bizkorp_common_meta, array(
	'title'     => esc_html__( 'Settings', 'bizkorp' ),
	'post_type' => array( 'page', 'post', 'bizkorp_service', 'bizkorp_team', 'bizkorp_project', 'product' ),
	'data_type' => 'serialize',
) );

// Create layout section
CSF::createSection( $bizkorp_common_meta, array(
	'title'  => esc_html__( 'Layout Settings ', 'bizkorp' ),
	'icon'   => 'fa fa-calculator',
	'fields' => array(

		array(
			'id'      => 'layout_meta',
			'type'    => 'select',
			'title'   => esc_html__( 'Layout', 'bizkorp' ),
			'options' => array(
				'default'       => esc_html__( 'Default', 'bizkorp' ),
				'left-sidebar'  => esc_html__( 'Left Sidebar', 'bizkorp' ),
				'full-width'    => esc_html__( 'Full Width', 'bizkorp' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'bizkorp' ),
			),
			'default' => 'default',
			'desc'    => esc_html__( 'Select layout', 'bizkorp' ),
		),

		array(
			'id'         => 'sidebar_meta',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'bizkorp' ),
			'options'    => 'bizkorp_sidebars',
			'dependency' => array( 'layout_meta', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select sidebar you want to show with this page.', 'bizkorp' ),
		),
	)
) );

// Create Header section
CSF::createSection( $bizkorp_common_meta, array(
	'title'  => esc_html__( 'Header Settings ', 'bizkorp' ),
	'icon'   => 'fa fa-header',
	'fields' => array(

		array(
			'id'      => 'header_style_meta',
			'type'    => 'select',
			'title'         => esc_html__( 'Select Header', 'bizkorp' ),
			'placeholder'   => esc_html__( 'Default', 'bizkorp' ),
			'empty_message' => esc_html__( 'No header template found. You can create header template from Bizkorp Headers > Add New.', 'bizkorp' ),
			'options'       => 'posts',
			'query_args'    => array(
				'post_type'      => 'bizkorp_header',
				'posts_per_page' => -1,
			),
			'desc'    => esc_html__('Select header for this page', 'bizkorp'),
		),
	)
) );

// Create a section
CSF::createSection( $bizkorp_common_meta, array(
	'title'  => esc_html__( 'Banner Settings', 'bizkorp' ),
	'icon'   => 'fa fa-flag-o',
	'fields' => array(
		array(
			'id'       => 'enable_banner',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Banner', 'bizkorp' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'bizkorp' ),
			'text_off' => esc_html__( 'No', 'bizkorp' ),
			'desc'     => esc_html__( 'Enable or disable banner.', 'bizkorp' ),
		),

		array(
			'id'                    => 'banner_background_meta',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Banner Background', 'bizkorp' ),
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => true,
			'background_size'       => true,
			'background_position'   => true,
			'background_repeat'     => true,
			'dependency'            => array( 'enable_banner', '==', true ),
			'output'                => '.banner-area.post-banner,.banner-area.page-banner,.banner-area.service-banner,.banner-area.team-banner,.banner-area.portfolio-banner,.banner-area.project-banner',
			'desc'                  => esc_html__( 'Select banner background color and image', 'bizkorp' ),
		),

		array(
			'id'         => 'hide_banner_title_meta',
			'type'       => 'button_set',
			'title'      => esc_html__( 'Hide Title', 'bizkorp' ),
			'options'    => array(
				'default' => esc_html__( 'Default', 'bizkorp' ),
				'yes'     => esc_html__( 'Yes', 'bizkorp' ),
				'no'      => esc_html__( 'No', 'bizkorp' ),
			),
			'default'    => 'default',
			'desc'       => esc_html__( 'Hide or show banner title.', 'bizkorp' ),
			'dependency' => array( 'enable_banner', '==', true ),
		),

		array(
			'id'         => 'custom_title',
			'type'       => 'text',
			'title'      => esc_html__( 'Banner Custom Title', 'bizkorp' ),
			'dependency' => array( 'enable_banner|hide_banner_title_meta', '==|!=', 'true|yes' ),
			'desc'       => esc_html__( 'If you want to use custom title write title here.If you don\'t, leave it empty.', 'bizkorp' )
		),

		array(
			'id'             => 'banner_title_typo_meta',
			'type'           => 'typography',
			'title'          => esc_html__( 'Banner Title Typography', 'bizkorp' ),
			'desc'           => esc_html__( 'Select banner title typography.', 'bizkorp' ),
			'output'         => '.banner-title',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'dependency'   => array( 'enable_banner|hide_banner_title_meta', '==|!=', 'true|yes' ),
		),


		array(
			'id'         => 'hide_banner_breadcrumb_meta',
			'type'       => 'button_set',
			'title'      => esc_html__( 'Hide Breadcrumb', 'bizkorp' ),
			'options'    => array(
				'default' => esc_html__( 'Default', 'bizkorp' ),
				'yes'     => esc_html__( 'Yes', 'bizkorp' ),
				'no'      => esc_html__( 'No', 'bizkorp' ),
			),
			'default'    => 'default',
			'desc'       => esc_html__( 'Hide or show banner breadcrumb.', 'bizkorp' ),
			'dependency' => array( 'enable_banner', '==', true ),
		),


		array(
			'id'             => 'banner_breadcrumb_typo_meta',
			'type'           => 'typography',
			'title'          => esc_html__( 'Banner Breadcrumb Typography', 'bizkorp' ),
			'desc'           => esc_html__( 'Select banner breadcrumb typography.', 'bizkorp' ),
			'output'         => '.banner-area .breadcrumb-container, .banner-area .breadcrumb-container a',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'dependency'   => array( 'enable_banner|hide_banner_breadcrumb_meta', '==|!=', 'true|yes' ),
		),

		array(
			'id'         => 'banner_text_align_meta',
			'type'       => 'button_set',
			'title'      => esc_html__( 'Banner Text Align', 'bizkorp' ),
			'options'    => array(
				'default' => esc_html__( 'Default', 'bizkorp' ),
				'start'    => esc_html__( 'Left', 'bizkorp' ),
				'center'  => esc_html__( 'Center', 'bizkorp' ),
				'end'   => esc_html__( 'Right', 'bizkorp' ),
			),
			'default'    => 'default',
			'dependency' => array( 'enable_banner', '==', true ),
			'desc'       => esc_html__( 'Select page banner text align.', 'bizkorp' ),
		),

		array(
			'id'         => 'banner_height_meta',
			'type'       => 'dimensions',
			'title'      => esc_html__( 'Banner Height', 'bizkorp' ),
			'output'     => '.banner-area.post-banner,.banner-area.page-banner,.banner-area.service-banner,.banner-area.team-banner,.banner-area.project-banner',
			'width'      => false,
			'height'     => true,
			'desc'       => esc_html__( 'Select banner height.', 'bizkorp' ),
			'dependency' => array( 'enable_banner', '==', true ),
		),
	)
) );

// Create Footer section
CSF::createSection($bizkorp_common_meta, array(
	'title'  => esc_html__('Footer Settings ', 'bizkorp'),
	'icon'   => 'fa fa-wordpress',
	'fields' => array(

		array(
			'id'      => 'footer_style_meta',
			'type'    => 'select',
			'title'         => esc_html__( 'Select Footer', 'bizkorp' ),
			'placeholder'   => esc_html__( 'Default', 'bizkorp' ),
			'empty_message' => esc_html__( 'No Footer Template Found. You can create footer template from Bizkorp Footers > Add New.', 'bizkorp' ),
			'options'       => 'posts',
			'query_args'    => array(
				'post_type'      => 'bizkorp_footer',
				'posts_per_page' => -1,
			),
			'desc'    => esc_html__('Select footer for this page', 'bizkorp'),
		),
	)
));
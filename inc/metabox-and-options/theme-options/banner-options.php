<?php

// Create banner options
CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Banner Options', 'bizkorp' ),
	'id'     => 'banner_default_options',
	'icon'   => 'fa fa-flag-o',
	'fields' => array(

		array(
			'id'                    => 'banner_default_background',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Banner Background', 'bizkorp' ),
			'background_gradient'   => false,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size'       => false,
			'background_position'   => false,
			'background_repeat'     => false,
			'output'                => '.banner-area',
			'desc'                  => esc_html__( 'Select banner background color and image. You can change this settings on individual page / post.', 'bizkorp' ),
		),

		array(
			'id'      => 'banner_default_text_align',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Banner Text Align', 'bizkorp' ),
			'options' => array(
				'start'   => esc_html__( 'Left', 'bizkorp' ),
				'center' => esc_html__( 'Center', 'bizkorp' ),
				'end'  => esc_html__( 'Right', 'bizkorp' ),
			),
			'default' => 'center',
			'desc'    => esc_html__( 'Select banner text align. You can change this settings on individual page / post.', 'bizkorp' ),
		),

		array(
			'id'      => 'hide_banner_title',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Hide Banner Title', 'bizkorp' ),
			'options' => array(
				'yes' => esc_html__( 'Yes', 'bizkorp' ),
				'no'  => esc_html__( 'No', 'bizkorp' ),
			),
			'default' => 'no',
			'desc'    => esc_html__( 'Hide banner title. You can change this settings on individual page / post.', 'bizkorp' ),
		),

		array(
			'id'             => 'banner_title_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Banner Title Typography', 'bizkorp' ),
			'desc'           => esc_html__( 'Select banner title typography.', 'bizkorp' ),
			'output'         => '.banner-title',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'dependency'   => array( 'hide_banner_title', '==', 'no' ),
		),

		array(
			'id'      => 'hide_banner_breadcrumb',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Hide Banner Breadcrumb', 'bizkorp' ),
			'options' => array(
				'yes' => esc_html__( 'Yes', 'bizkorp' ),
				'no'  => esc_html__( 'No', 'bizkorp' ),
			),
			'default' => 'no',
			'desc'    => esc_html__( 'Hide banner breadcrumb. You can change this settings on individual page / post.', 'bizkorp' ),
		),

		array(
			'id'             => 'banner_breadcrumb_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Banner Breadcrumb Typography', 'bizkorp' ),
			'desc'           => esc_html__( 'Select breadcrumb typography.', 'bizkorp' ),
			'output'         => '.banner-area .breadcrumb-container, .banner-area .breadcrumb-container a',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'dependency'   => array( 'hide_banner_breadcrumb', '==', 'no' ),
		),

		array(
			'id'            => 'banner_default_height',
			'type'          => 'dimensions',
			'title'         => esc_html__( 'Banner Height', 'bizkorp' ),
			'output'        => '.banner-area,.header-style-two .banner-area',
			'width'         => false,
			'height'        => true,
			'desc'          => esc_html__( 'Select banner height. You can change this settings on individual page / post.', 'bizkorp' ),
		),
	)
) );
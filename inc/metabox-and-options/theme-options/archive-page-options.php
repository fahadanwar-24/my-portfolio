<?php
//Archive Options

CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Archive Page', 'bizkorp' ),
	'id'     => 'archive_page_options',
	'icon'   => 'fa fa-file-archive-o',
	'fields' => array(
		array(
			'id'      => 'archive_layout',
			'type'    => 'select',
			'title'   => esc_html__( 'Archive Layout', 'bizkorp' ),
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
			'desc'    => esc_html__( 'Select archive page layout.', 'bizkorp' ),
		),

		array(
			'id'       => 'archive_banner',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Archive Banner', 'bizkorp' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'bizkorp' ),
			'text_off' => esc_html__( 'No', 'bizkorp' ),
			'desc'     => esc_html__( 'Enable or disable archive page banner.', 'bizkorp' ),
		),

		array(
			'id'                    => 'archive_banner_background_options',
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
			'dependency'            => array( 'archive_banner', '==', true ),
			'output'                => '.banner-area.archive-banner',
			'desc'                  => esc_html__( 'If you want different banner background settings for archive page then select archive page banner background Options from here.', 'bizkorp' ),
		),
	)
) );
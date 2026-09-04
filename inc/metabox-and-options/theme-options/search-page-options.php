<?php
//Search Options

CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Search Page', 'bizkorp' ),
	'id'     => 'search_page_options',
	'icon'   => 'fa fa-search',
	'fields' => array(

		array(
			'id'      => 'search_layout',
			'type'    => 'select',
			'title'   => esc_html__( 'Search Layout', 'bizkorp' ),
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
			'desc'    => esc_html__( 'Select search page layout.', 'bizkorp' ),
		),

		array(
			'id'       => 'search_banner',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Search Banner', 'bizkorp' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'bizkorp' ),
			'text_off' => esc_html__( 'No', 'bizkorp' ),
			'desc'     => esc_html__( 'Enable or disable search page banner.', 'bizkorp' ),
		),

		array(
			'id'                    => 'search_banner_background_options',
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
			'dependency'            => array( 'search_banner', '==', true ),
			'output'                => '.banner-area.search-banner',
			'desc'                  => esc_html__( 'If you want different banner background settings for search page then select search page banner background options from here.', 'bizkorp' ),
		),

		array(
			'id'    => 'search_placeholder',
			'type'  => 'text',
			'title' => esc_html__( 'Search Field Placeholder', 'bizkorp' ),
			'desc'  => esc_html__( 'Type search placeholder here.', 'bizkorp' ),
		),
	)
) );
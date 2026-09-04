<?php

// Create Page Options
CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Page Options', 'bizkorp' ),
	'id'     => 'page_options',
	'icon'   => 'fa fa-file-text-o',
	'fields' => array(
		array(
			'id'      => 'page_default_layout',
			'type'    => 'select',
			'title'   => esc_html__('Page Layout', 'bizkorp'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'bizkorp'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'bizkorp'),
				'right-sidebar' => esc_html__('Right Sidebar', 'bizkorp'),
			),
			'default' => 'full-width',
			'desc'    => esc_html__('Select page layout.', 'bizkorp'),
		),

		array(
			'id'         => 'page_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'bizkorp' ),
			'options'    => 'bizkorp_sidebars',
			'default' => 'bizkorp-sidebar',
			'dependency' => array( 'page_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all pages. You can override this settings on individual page.', 'bizkorp' ),
		),
	)
) );
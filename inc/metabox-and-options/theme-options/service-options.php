<?php
//Service Option
CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Service Options', 'bizkorp' ),
	'id'     => 'service_options',
	'icon'   => 'fa fa-th',
	'fields' => array(
		array(
			'id'      => 'service_default_layout',
			'type'    => 'select',
			'title'   => esc_html__('Service Layout', 'bizkorp'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'bizkorp'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'bizkorp'),
				'right-sidebar' => esc_html__('Right Sidebar', 'bizkorp'),
			),
			'default' => 'full-width',
			'desc'    => esc_html__('Select service layout.', 'bizkorp'),
		),

		array(
			'id'         => 'service_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'bizkorp' ),
			'options'    => 'bizkorp_sidebars',
			'default' => 'bizkorp-service-sidebar',
			'dependency' => array( 'service_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all services. You can override this settings on individual service.', 'bizkorp' ),
		),

		array(
			'id'    => 'service_url_slug',
			'type'  => 'text',
			'default' => 'service',
			'title' => esc_html__( 'URL Slug', 'bizkorp' ),
			'desc'  => esc_html__( 'Change service slug on URL. Don\'t forget to reset permalink after change this.', 'bizkorp' ),
		),

	)
) );
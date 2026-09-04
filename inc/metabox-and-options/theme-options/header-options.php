<?php
// Create header Settings section

CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Header', 'bizkorp' ),
	'icon'   => 'fa fa-credit-card',
	'fields' => array(
		array(
			'id'            => 'site_default_header',
			'type'          => 'select',
			'title'         => esc_html__( 'Select Header', 'bizkorp' ),
			'placeholder'   => esc_html__( 'Default', 'bizkorp' ),
			'empty_message' => esc_html__( 'No Header Template Found. You can create header template from Bizkorp Headers > Add New.', 'bizkorp' ),
			'options'       => 'posts',
			'query_args'    => array(
				'post_type'      => 'bizkorp_header',
				'posts_per_page' => - 1,
			),
			'desc'          => esc_html__( 'Select site header from here. Selected template will be used for all pages by default.', 'bizkorp' ),
		),

		array(
			'type'       => 'notice',
			'id'         => 'site_header_notice',
			'style'      => 'warning',
			'content' => sprintf(
				'%s <a href="%s" target="_blank">%s</a> %s',
				esc_html__('Elementor header selected. You can edit/create Header Template from', 'bizkorp'),
				admin_url('edit.php?post_type=bizkorp_header'),
				esc_html__('Bizkorp Headers', 'bizkorp'),
				esc_html__('dashboard menu.', 'bizkorp')
			),
			'dependency' => array(
				'site_default_header',
				'!=',
				'',
			),
		),

		array(
			'id'           => 'header_default_logo',
			'type'         => 'media',
			'title'        => esc_html__( 'Header Logo', 'bizkorp' ),
			'library'      => 'image',
			'url'          => false,
			'button_title' => esc_html__( 'Upload Logo', 'bizkorp' ),
			'desc'         => esc_html__( 'Upload logo image', 'bizkorp' ),
			'dependency'   => array(
				'site_default_header',
				'==',
				'',
			),

		),

		array(
			'id'         => 'logo_image_size',
			'type'       => 'dimensions',
			'title'      => esc_html__( 'Logo Image Size', 'bizkorp' ),
			'output'     => '.site-branding img',
			'width'      => true,
			'height'     => true,
			'desc'       => esc_html__( 'Select logo image size.', 'bizkorp' ),
			'dependency' => array(
				'site_default_header',
				'==',
				'',
			),
		),

		array(
			'id'       => 'sticky_header',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Sticky Header', 'bizkorp'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Enable / Disable sticky header.', 'bizkorp'),
			'dependency' => array(
				'site_default_header',
				'==',
				'',
			),
		),
	)
) );
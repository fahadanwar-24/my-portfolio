<?php
// Create typography section
CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Typography', 'bizkorp' ),
	'id'     => 'typography_options',
	'icon'   => 'fa fa-text-width',
	'fields' => array(

		array(
			'id'       => 'enable_theme_default_font',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Default Font', 'bizkorp' ),
			'text_on'  => esc_html__( 'Yes', 'bizkorp' ),
			'text_off' => esc_html__( 'No', 'bizkorp' ),
			'desc'     => esc_html__( 'Enable or disable default font. If you want to use different body / heading font then you can disable default font.', 'bizkorp' ),
			'default'  => true
		),

		array(
			'id'             => 'body_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Body Font', 'bizkorp' ),
			'desc'           => esc_html__( 'Select body typography.', 'bizkorp' ),
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'dependency'   => array( 'enable_theme_default_font', '!=', 'true' ),
		),

		array(
			'id'             => 'heading_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Heading Font', 'bizkorp' ),
			'desc'           => esc_html__( 'Select heading typography.', 'bizkorp' ),
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'dependency'   => array( 'enable_theme_default_font', '!=', 'true' ),
		),
	),
) );
<?php
// Create Color section
CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Colors', 'bizkorp' ),
	'id'     => 'colors_options',
	'icon'   => 'fas fa-paint-brush',
	'fields' => array(

		array(
			'id'       => 'theme_primary_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Primary Color', 'bizkorp' ),
			'desc'     => esc_html__( 'Please select the primary theme color. If certain elements do not reflect this change, it indicates that their colors have been individually customized within the Elementor widget settings. To update these elements, switch to Elementor edit mode and manually adjust the color for each specific widget.', 'bizkorp' ),
		),

		array(
			'id'                            => 'primary_gradient_color',
			'type'                          => 'background',
			'title'                         => esc_html__('Primary Gradient Color', 'bizkorp'),
			'background_image'              => false,
			'background_gradient'           => true,
			'background_origin'             => false,
			'background_clip'               => false,
			'background_blend-mode'         => false,
			'background_attachment'         => false,
			'background_size'               => false,
			'background_position'           => false,
			'background_gradient_direction' => false,
			'background_repeat'             => false,
			'desc'     => esc_html__( 'Please select the primary gradient color. If certain elements do not reflect this change, it indicates that their colors have been individually customized within the Elementor widget settings. To update these elements, switch to Elementor edit mode and manually adjust the color for each specific widget.', 'bizkorp' ),
		),

		array(
			'id'                            => 'secondary_gradient_color',
			'type'                          => 'background',
			'title'                         => esc_html__('Secondary / Hover Gradient Color', 'bizkorp'),
			'background_image'              => false,
			'background_gradient'           => true,
			'background_origin'             => false,
			'background_clip'               => false,
			'background_blend-mode'         => false,
			'background_attachment'         => false,
			'background_size'               => false,
			'background_position'           => false,
			'background_gradient_direction' => false,
			'background_repeat'             => false,
			'desc'     => esc_html__( 'Please select the secondary gradient color. If certain elements do not reflect this change, it indicates that their colors have been individually customized within the Elementor widget settings. To update these elements, switch to Elementor edit mode and manually adjust the color for each specific widget.', 'bizkorp' ),
		),
	)
) );


// Create Preloader section
CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Preloader', 'bizkorp' ),
	'id'     => 'preloader_options',
	'icon'   => 'fas fa-spinner',
	'fields' => array(
		array(
			'id'       => 'enable_preloader',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Pre Loader', 'bizkorp' ),
			'text_on'  => esc_html__( 'Yes', 'bizkorp' ),
			'text_off' => esc_html__( 'No', 'bizkorp' ),
			'desc'     => esc_html__( 'Enable or disable Site Preloader.', 'bizkorp' ),
			'default'  => true
		),

		array(
			'id'         => 'preloader_three_big_text',
			'type'       => 'text',
			'title'      => esc_html__( 'Big Text', 'bizkorp' ),
			'default'      => esc_html__( 'Bizkorp', 'bizkorp' ),
			'dependency'   => array( 'enable_preloader', '==', 'true' ),
		),

		array(
			'id'         => 'preloader_three_small_text',
			'type'       => 'text',
			'title'      => esc_html__( 'Small Text', 'bizkorp' ),
			'default'      => esc_html__( 'Loading...', 'bizkorp' ),
			'dependency'   => array( 'enable_preloader', '==', 'true' ),
		),

		array(
			'id'                    => 'preloader_background_color',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Preloader Background Color', 'bizkorp' ),
			'background_image'      => false,
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size'       => false,
			'background_position'   => false,
			'background_repeat'     => false,
			'output'                => array(
				'background-color' => '.preloader-wrapper,#loader-wrapper .loader-section,.text-preloader-wrapper'
			),
			'desc'                  => esc_html__( 'Select preloader background color. Select both color if you want to use gradient color', 'bizkorp' ),
			'dependency'   => array( 'enable_preloader', '==', 'true' ),
		),
	)
) );

// Create Color section
CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Mouse Cursor', 'bizkorp' ),
	'id'     => 'mouse_cursor_options',
	'icon'   => 'fas fa-mouse-pointer',
	'fields' => array(
		array(
			'id'       => 'enable_custom_cursor',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Custom Cursor', 'bizkorp' ),
			'text_on'  => esc_html__( 'Yes', 'bizkorp' ),
			'text_off' => esc_html__( 'No', 'bizkorp' ),
			'desc'     => esc_html__( 'Enable or disable custom cursor.', 'bizkorp' ),
			'default'  => false,
		),
	)
) );
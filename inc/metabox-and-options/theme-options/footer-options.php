<?php
// Create Footer section

CSF::createSection( $bizkorp_theme_option, array(
	'id'    => 'footer_options',
	'title'  => esc_html__( 'Footer Options', 'bizkorp' ),
	'icon'   => 'fa fa-wordpress',
	'fields' => array(
		array(
			'id'            => 'site_default_footer',
			'type'          => 'select',
			'title'         => esc_html__( 'Select Footer', 'bizkorp' ),
			'placeholder'   => esc_html__( 'Default', 'bizkorp' ),
			'empty_message' => esc_html__( 'No Footer Template Found. You can create footer template from Bizkorp Footers > Add New.', 'bizkorp' ),
			'options'       => 'posts',
			'query_args'    => array(
				'post_type'      => 'bizkorp_footer',
				'posts_per_page' => -1,
			),
			'desc'          => esc_html__( 'Select a Footer template from here.', 'bizkorp' ),
		),

		array(
			'type'       => 'notice',
			'id'            => 'site_footer_notice',
			'style'      => 'warning',
			'content' => sprintf(
				'%s <a href="%s" target="_blank">%s</a> %s',
				esc_html__('Elementor footer selected. You can edit/create Footer Template from', 'bizkorp'),
				admin_url('edit.php?post_type=bizkorp_footer'),
				esc_html__('Bizkorp Footers', 'bizkorp'),
				esc_html__('dashboard menu.', 'bizkorp')
			),
			'dependency' => array(
				'site_default_footer', '!=', '',
			),
		),

		array(
			'id'                    => 'footer_bg_image',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Footer Background', 'bizkorp' ),
			'background_gradient'   => false,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size'       => true,
			'background_position'   => true,
			'background_repeat'     => true,
			'output'                => '.site-footer',
			'desc'                  => esc_html__( 'Select footer background color and image.', 'bizkorp' ),
			'dependency' => array(
				'site_default_footer', '==', '',
			),
		),

		array(
			'id'      => 'footer_widget_column',
			'type'    => 'select',
			'title'   => esc_html__( 'Widget Column', 'bizkorp' ),
			'desc'    => esc_html__( 'Select widget area column number.', 'bizkorp' ),
			'options' => array(
				'col-lg-12' => esc_html__( '1 Column', 'bizkorp' ),
				'col-lg-6'  => esc_html__( '2 Column', 'bizkorp' ),
				'col-lg-4'  => esc_html__( '3 Column', 'bizkorp' ),
				'col-lg-3'  => esc_html__( '4 Column', 'bizkorp' ),
			),
			'default' => 'col-lg-3',
			'dependency' => array(
				'site_default_footer', '==', '',
			),
		),


		array(
			'id'            => 'footer_info_left_text',
			'type'          => 'wp_editor',
			'title'         => esc_html__( 'Footer Bottom Left Info Text', 'bizkorp' ),
			'desc'          => esc_html__( 'Type footer bottom left info text here.', 'bizkorp' ),
			'tinymce'       => true,
			'quicktags'     => true,
			'media_buttons' => false,
			'height'        => '100px',
			'dependency' => array(
				'site_default_footer', '==', '',
			),
		),

		array(
			'id'            => 'copyright_text',
			'type'          => 'wp_editor',
			'title'         => esc_html__( 'Copyright Text', 'bizkorp' ),
			'desc'          => esc_html__( 'Type site copyright text here.', 'bizkorp' ),
			'tinymce'       => true,
			'quicktags'     => true,
			'media_buttons' => false,
			'height'        => '100px',
			'dependency' => array(
				'site_default_footer', '==', '',
			),
		),

		array(
			'id'       => 'go_to_top_button',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Go Top Button', 'bizkorp' ),
			'default'  => false,
			'text_on'  => esc_html__( 'Yes', 'bizkorp' ),
			'text_off' => esc_html__( 'No', 'bizkorp' ),
			'desc'     => esc_html__( 'Enable or disable go to top button.', 'bizkorp' ),
		),

		array(
			'id'    => 'go_top_icon',
			'type'  => 'icon',
			'title' => esc_html__( 'Go Top Icon', 'bizkorp' ),
			'desc'  => esc_html__( 'Select icon', 'bizkorp' ),
			'default'  => 'flaticon-up-2',
			'dependency' => array(
				'go_to_top_button',
				'==',
				'true',
				'all'
			),
		),

		array(
			'id'                    => 'top_icon_background_color',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Top Icon Background', 'bizkorp' ),
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
				'background-color' => '.scroll-to-top'
			),
			'dependency' => array(
				'go_to_top_button',
				'==',
				'true',
				'all'
			),
			'desc'    => esc_html__('If you want to use gradient color use both color field', 'bizkorp'),
		),

		array(
			'id'     => 'go_top_icon_color',
			'type'   => 'color',
			'title'  => esc_html__('Top Icon Color', 'bizkorp'),
			'output' => array(
				'color' => '.scroll-to-top'
			),
			'dependency' => array(
				'go_to_top_button',
				'==',
				'true',
				'all'
			),
		),
	)
) );
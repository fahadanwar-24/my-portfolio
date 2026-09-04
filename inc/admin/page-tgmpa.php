<?php

function bizkorp_install_required_plugins() {

	$plugins = array(

		array(
			'name'     => esc_html__('Breadcrumb NavXT', 'bizkorp'),
			'slug'     => 'breadcrumb-navxt',
			'version'  => '7.5.1',
			'required' => false,
		),

		array(
			'name'     => esc_html__('Contact Form 7', 'bizkorp'),
			'slug'     => 'contact-form-7',
			'version'  => '6.1.5',
			'required' => false
		),

		array(
			'name'     => esc_html__('Elementor Page Builder', 'bizkorp'),
			'slug'     => 'elementor',
			'version'  => '3.35.5',
			'required' => true,
		),

		array(
			'name'     => esc_html__('MC4WP: Mailchimp for WordPress', 'bizkorp'),
			'slug'     => 'mailchimp-for-wp',
			'version'  => '4.11.1',
			'required' => false,
		),

		array(
			'name'     => esc_html__('One Click Demo Import', 'bizkorp'),
			'slug'     => 'one-click-demo-import',
			'version'  => '3.4.0',
			'required' => false,
		),


		array(
			'name'     => esc_html__('ThemeDraft Core', 'bizkorp'),
			'slug'     => 'themedraft-core',
			'source'   => get_template_directory(). '/inc/plugins/themedraft-core.zip',
			'version'  => '1.0.2',
			'required' => true
		),

		array(
			'name'     => esc_html__('WooCommerce', 'bizkorp'),
			'slug'     => 'woocommerce',
			'version'  => '10.5.2',
			'required' => false,
		),

		array(
			'name'     => esc_html__('TI WooCommerce Wishlist', 'bizkorp'),
			'slug'     => 'ti-woocommerce-wishlist',
			'version'  => '2.11.1',
			'required' => false,
		),
	);

	$config = array(
		'id'           => 'bizkorp',
		'parent_slug'  => 'bizkorp',
		'menu'         => 'bizkorp-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'is_automatic' => false,
		'dismiss_msg'  => '',
		'message'      => '',
		'default_path' => '',
	);

	tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'bizkorp_install_required_plugins');
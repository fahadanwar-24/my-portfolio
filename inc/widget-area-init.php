<?php

//Register widget area
function bizkorp_widgets_init() {
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'bizkorp'),
		'id'            => 'bizkorp-sidebar',
		'description'   => esc_html__('Add widgets here.', 'bizkorp'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));


	register_sidebar(array(
		'name'          => esc_html__('Service Sidebar', 'bizkorp'),
		'id'            => 'bizkorp-service-sidebar',
		'description'   => esc_html__('Add service widgets here.', 'bizkorp'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Project Sidebar', 'bizkorp'),
		'id'            => 'bizkorp-project-sidebar',
		'description'   => esc_html__('Add project widgets here.', 'bizkorp'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Team Sidebar', 'bizkorp'),
		'id'            => 'bizkorp-team-sidebar',
		'description'   => esc_html__('Add team widgets here.', 'bizkorp'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	$footer_widget_column = bizkorp_option('footer_widget_column', 'col-lg-3');
	register_sidebar(array(
		'name'          => esc_html__('Footer Widget', 'bizkorp'),
		'id'            => 'bizkorp-footer-widget',
		'description'   => esc_html__('Add footer widgets here.', 'bizkorp'),
		'before_widget' => '<div id="%1$s" class="widget '.esc_attr($footer_widget_column).' col-md-6 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));

	/**
	 * Load Shop Sidebar.
	 */
	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar(array(
			'name'          => esc_html__('Shop Sidebar', 'bizkorp'),
			'id'            => 'bizkorp-shop-sidebar',
			'description'   => esc_html__('Add shop widgets here.', 'bizkorp'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
	}
}

add_action('widgets_init', 'bizkorp_widgets_init');
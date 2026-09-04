<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

// Remove CSF welcome page
add_filter( 'csf_welcome_page', '__return_false' );

/*
 *  Create theme options
 */

$bizkorp_theme_option = 'bizkorp_theme_options';

CSF::createOptions( $bizkorp_theme_option, array(
	'framework_title' => wp_kses(
		sprintf(
		// Translators: %s is the version number of the theme.
			__( 'Bizkorp Options <small>V %s</small>', 'bizkorp' ),
			esc_html( $bizkorp_theme_data->get( 'Version' ) ) // Escape the version number.
		),
		bizkorp_allow_html()
	),

	'theme'      => 'dark',
	'menu_title'      => esc_html__( 'Theme Options', 'bizkorp' ),
	'menu_slug'       => 'bizkorp-options',
	'menu_type'       => 'submenu',
	'menu_parent'     => 'bizkorp',
	'class'           => 'bizkorp-theme-option-wrapper',
	'footer_credit'   => wp_kses( __( 'Developed by: <a target="_blank" href="https://themedraft.net">ThemeDraft</a>', 'bizkorp' ), bizkorp_allow_html() ),
	'footer_after'     => esc_html__( 'Thank you for choosing Bizkorp. We are honored and are fully dedicated to making your experience perfect.', 'bizkorp' ),
	'footer_text'   => wp_kses( __( '<a class="theme-option-footer-link" target="_blank" href="https://docs.themedraft.net/wp/bizkorp">Documentation</a><a class="theme-option-footer-link" target="_blank" href="https://www.youtube.com/watch?v=bGplCMnL89I&list=PLpJtLwUtMEGjZ9hdOQK7xwAqKu6ObVNqA">Video Tutorials</a><a class="theme-option-footer-link" target="_blank" href="https://themeforest.net/item/bizkorp-creative-business-agency-wordpress-theme/58239108/support">Get Support</a>', 'bizkorp' ), bizkorp_allow_html() ),
	'async_webfont'   => false,
	'defaults'        => bizkorp_default_theme_options(),
) );


/*
 * General options
 */
require_once 'general-options.php';

/*
 * Typography options
 */
require_once 'typography-options.php';

/*
 * Header options
 */
require_once 'header-options.php';

/*
 * Banner options
 */
require_once 'banner-options.php';


/*
 * Page options
 */
require_once 'page-options.php';

/*
 * blog Page options
 */
require_once 'blog-page-options.php';

/*
 * Post options
 */
require_once 'single-post-options.php';

/*
 * Service options
 */
require_once 'service-options.php';

/*
 * Project options
 */
require_once 'project-options.php';

/*
 * Team options
 */
require_once 'team-options.php';

/*
 * WooCommerce Options
 */
if ( class_exists( 'WooCommerce' ) ) {
	require_once 'woocommerce-options/woocommerce-options.php';
}

/*
 * Archive Page options
 */
require_once 'archive-page-options.php';

/*
 * Search Page options
 */
require_once 'search-page-options.php';

/*
 * Error 404 Page options
 */
require_once 'error-page-options.php';

/*
 * Footer options
 */
require_once 'footer-options.php';



// Custom Css section
CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Custom Css', 'bizkorp' ),
	'id'     => 'custom_css_options',
	'icon'   => 'fa fa-css3',
	'fields' => array(

		array(
			'id'       => 'bizkorp_custom_css',
			'type'     => 'code_editor',
			'title'    => esc_html__( 'Custom Css', 'bizkorp' ),
			'settings' => array(
				'theme'  => 'mbo',
				'mode'   => 'css',
			),
			'sanitize' => false,
		),
	)
) );


/*
 * Backup options
 */
CSF::createSection($bizkorp_theme_option, array(
	'title'  => esc_html__('Backup', 'bizkorp'),
	'id'     => 'backup_options',
	'icon'   => 'fa fa-window-restore',
	'fields' => array(
		array(
			'type' => 'backup',
		),
	)
));
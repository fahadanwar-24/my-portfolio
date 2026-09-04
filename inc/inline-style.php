<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

function bizkorp_inline_style() {

	wp_enqueue_style('bizkorp-inline-style', get_theme_file_uri('assets/css/inline-style.css'), array(), BIZKORP_VERSION, 'all');

	$bizkorp_inline_css = '
        .elementor-inner {margin-left: -10px;margin-right: -10px;}.elementor-inner .elementor-section-wrap > section:first-of-type .elementor-editor-element-settings {display: block !important;}.elementor-inner .elementor-section-wrap > section:first-of-type .elementor-editor-element-settings li {display: inline-block !important;}.elementor-editor-active .elementor-editor-element-setting{height: 25px;line-height: 25px;text-align: center;}.elementor-section.elementor-section-boxed>.elementor-container {max-width: 1320px !important;}.elementor-section-stretched.elementor-section-boxed .elementor-row{padding-left: 5px;padding-right: 5px;}.elementor-section-stretched.elementor-section-boxed .elementor-container.elementor-column-gap-extended {margin-left: auto;margin-right: auto;}.elementor-section-wrap > section:first-of-type .elementor-editor-element-settings {display: inline-flex !important;}  
    ';

	$logo_image_size = bizkorp_option('logo_image_size');
	if(!empty($logo_image_size['width'])){
		$bizkorp_inline_css .='
			.site-branding img {
			    max-width: inherit;
			}
		';
	}

	$default_font = bizkorp_option('enable_theme_default_font', true);
	$body_font = bizkorp_option('body_typo', '');
	$heading_typo = bizkorp_option('heading_typo', '');
	if($default_font != true && array_key_exists('font-family', $body_font)){
		$bizkorp_inline_css .= '
			:root {
				--bizkorp-body-font: '.$body_font['font-family'].';
			}
		';
	}

	if($default_font != true && array_key_exists('font-family', $heading_typo)){
		$bizkorp_inline_css .= '
			:root {
				--bizkorp-heading-font: '.$heading_typo['font-family'].';
			}
		';
	}

	$primary_color = bizkorp_option('theme_primary_color');
	if(!empty($primary_color)){
		$bizkorp_inline_css .= '
			:root {
				--bizkorp-primary-color-one: '.$primary_color.';
				--bizkorp-primary-color-two: '.$primary_color.';
			}
		';
	}

	$primary_gradient_color = bizkorp_option('primary_gradient_color');

	if ( is_array($primary_gradient_color) && !empty($primary_gradient_color['background-color']) && !empty($primary_gradient_color['background-gradient-color'])) {
		$bizkorp_inline_css .= '
        :root {
            --bizkorp-gradient-color-one: linear-gradient(136deg, '.$primary_gradient_color["background-color"].' 0%, '.$primary_gradient_color["background-gradient-color"].' 98.28%);
        }
    ';
	}

	$secondary_gradient_color = bizkorp_option('secondary_gradient_color');

	if ( is_array($secondary_gradient_color) && !empty($secondary_gradient_color['background-color']) && !empty($secondary_gradient_color['background-gradient-color'])) {
		$bizkorp_inline_css .= '
        :root {
            --bizkorp-gradient-color-two: linear-gradient(136deg, '.$secondary_gradient_color["background-color"].' 0%, '.$secondary_gradient_color["background-gradient-color"].' 98.28%);
        }
    ';
	}

	$custom_css = bizkorp_option('bizkorp_custom_css');

	$bizkorp_inline_css .= ''.$custom_css.'';

	wp_add_inline_style('bizkorp-inline-style', $bizkorp_inline_css);
}

add_action('wp_enqueue_scripts', 'bizkorp_inline_style');
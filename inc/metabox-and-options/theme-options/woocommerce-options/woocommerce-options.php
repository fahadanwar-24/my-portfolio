<?php
// Create WooCommerce options section
CSF::createSection($bizkorp_theme_option, array(
	'title' => esc_html__('WooCommerce', 'bizkorp'),
	'id'    => 'td_woo_options',
	'icon'  => 'fa fa-shopping-cart',
));

CSF::createSection($bizkorp_theme_option, array(
	'parent' => 'td_woo_options',
	'title'  => esc_html__('Shop Page', 'bizkorp'),
	'icon'   => 'fa fa-shopping-bag',
	'fields' => array(

		array(
			'id'      => 'shop_page_layout',
			'type'    => 'select',
			'title'   => esc_html__('Shop Layout', 'bizkorp'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'bizkorp'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'bizkorp'),
				'right-sidebar' => esc_html__('Right Sidebar', 'bizkorp'),
			),
			'default' => 'full-width',
			'desc'    => esc_html__('Select shop page layout.', 'bizkorp'),
		),

		array(
			'id'         => 'shop_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'bizkorp' ),
			'options'    => 'bizkorp_sidebars',
			'default' => 'bizkorp-shop-sidebar',
			'dependency' => array( 'shop_page_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select shop page sidebar.', 'bizkorp' ),
		),

		array(
			'id'         => 'shop_custom_title',
			'type'       => 'text',
			'title'      => esc_html__('Shop Title', 'bizkorp'),
			'default' => esc_html__('Shop', 'bizkorp'),
			'desc'       => esc_html__('Shop page banner title here.', 'bizkorp')
		),

		array(
			'id'    => 'product_per_page',
			'type'  => 'text',
			'title' => esc_html__( 'Product Per Page', 'bizkorp' ),
			'default' => 8,
			'desc'  => esc_html__( 'Type how many product you want to show per page. Number only.', 'bizkorp' ),
		),

		array(
			'id'    => 'product_column',
			'type'  => 'text',
			'title' => esc_html__( 'Product Column Per Row', 'bizkorp' ),
			'default' => 4,
			'desc'  => esc_html__( 'How many product you want to show per row. Number only.', 'bizkorp' ),
		),

		array(
			'id'       => 'show_category_on_shop_page',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Product First Category', 'bizkorp'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Enable or disable product quick view icon.', 'bizkorp'),
		),

		array(
			'id'       => 'product_wish_list',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Wish list Icon', 'bizkorp'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Enable or disable product wish list icon.', 'bizkorp'),
		),
	)
));

CSF::createSection($bizkorp_theme_option, array(
	'parent' => 'td_woo_options',
	'title'  => esc_html__('Single Product', 'bizkorp'),
	'icon'   => 'fa fa-product-hunt',
	'fields' => array(

		array(
			'id'      => 'product_page_layout',
			'type'    => 'select',
			'title'   => esc_html__('Product Layout', 'bizkorp'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'bizkorp'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'bizkorp'),
				'right-sidebar' => esc_html__('Right Sidebar', 'bizkorp'),
			),
			'default' => 'full-width',
			'desc'    => esc_html__('Select product layout.', 'bizkorp'),
		),

		array(
			'id'         => 'product_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'bizkorp' ),
			'options'    => 'bizkorp_sidebars',
			'default' => 'bizkorp-shop-sidebar',
			'dependency' => array( 'product_page_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select product sidebar.', 'bizkorp' ),
		),

		array(
			'id'         => 'product_banner_title',
			'type'       => 'text',
			'title'      => esc_html__('Product Banner Title', 'bizkorp'),
			'default' => esc_html__('Shop', 'bizkorp'),
			'desc'       => esc_html__('If not empty, this title will show for all single product\'s banner title. Make this field empty to show product default title. You can overwrite it on the individual product page.', 'bizkorp')
		),

		array(
			'id'       => 'product_sku',
			'type'     => 'switcher',
			'title'    => esc_html__('Show SKU', 'bizkorp'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Show / Hide product SKU.', 'bizkorp'),
		),

		array(
			'id'       => 'product_cat',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Category', 'bizkorp'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Show / Hide product category.', 'bizkorp'),
		),

		array(
			'id'       => 'product_tag',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Tags', 'bizkorp'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Show / Hide product tags.', 'bizkorp'),
		),

		array(
			'id'       => 'show_related_products',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Related Products', 'bizkorp'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'bizkorp'),
			'text_off' => esc_html__('No', 'bizkorp'),
			'desc'     => esc_html__('Show / Hide related products.', 'bizkorp'),
		),
	)
));
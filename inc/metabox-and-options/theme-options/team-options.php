<?php
//Team Options
CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Team Options', 'bizkorp' ),
	'id'     => 'team_options',
	'icon'   => 'fa fa-users',
	'fields' => array(

		array(
			'id'      => 'team_default_layout',
			'type'    => 'select',
			'title'   => esc_html__( 'Team Layout', 'bizkorp' ),
			'options' => array(
				'full-width'    => esc_html__( 'Full Width', 'bizkorp' ),
				'left-sidebar'  => esc_html__( 'Left Sidebar', 'bizkorp' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'bizkorp' ),
			),
			'default' => 'full-width',
			'desc'    => esc_html__( 'Select team layout.', 'bizkorp' ),
		),

		array(
			'id'         => 'team_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'bizkorp' ),
			'options'    => 'bizkorp_sidebars',
			'default'    => 'bizkorp-team-sidebar',
			'dependency' => array( 'team_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all team members. You can override this settings on individual team member.', 'bizkorp' ),
		),

		array(
			'id'    => 'team_url_slug',
			'type'  => 'text',
			'default' => 'team',
			'title' => esc_html__( 'URL Slug', 'bizkorp' ),
			'desc'  => esc_html__( 'Change team slug on URL. Don\'t forget to reset permalink after change this.', 'bizkorp' ),
		),

	)
) );
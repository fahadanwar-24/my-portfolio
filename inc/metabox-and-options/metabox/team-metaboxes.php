<?php

$bizkorp_team_meta = 'bizkorp_team_meta';

// Create a metabox
CSF::createMetabox( $bizkorp_team_meta, array(
	'title'     => esc_html__( 'Member Profiles Options', 'bizkorp' ),
	'post_type' => 'bizkorp_team',
	'data_type' => 'serialize',
) );


CSF::createSection( $bizkorp_team_meta, array(
	'fields' => array(
		array(
			'id'           => 'member_social_profile',
			'type'         => 'group',
			'title'        => esc_html__( 'Member Social', 'bizkorp' ),
			'desc'         => esc_html__( 'Add member social profile icons here.', 'bizkorp' ),
			'button_title' => esc_html__( 'Add Social Profile', 'bizkorp' ),
			'fields'       => array(
				array(
					'id'    => 'site_name',
					'type'  => 'text',
					'title' => esc_html__( 'Site Name', 'bizkorp' ),
					'desc'  => esc_html__( 'Type social site name here.', 'bizkorp' ),
				),

				array(
					'id'    => 'site_icon',
					'type'  => 'icon',
					'title' => esc_html__( 'Icon', 'bizkorp' ),
					'desc'  => esc_html__( 'Select icon', 'bizkorp' ),
				),

				array(
					'id'    => 'profile_url',
					'type'  => 'text',
					'title' => esc_html__( 'Profile Link', 'bizkorp' ),
					'desc'  => esc_html__( 'Type social site url here.', 'bizkorp' ),
				),
			),

			'default' => array(
				array(
					'site_name' => esc_html__( 'Facebook', 'bizkorp' ),
					'site_icon' => 'fab fa-facebook-f',
					'profile_url'  => '#',
				),

				array(
					'site_name' => esc_html__( 'Twitter', 'bizkorp' ),
					'site_icon' => 'fab fa-twitter',
					'profile_url'  => '#',
				),

				array(
					'site_name' => esc_html__( 'LinkedIn', 'bizkorp' ),
					'site_icon' => 'fab fa-linkedin-in',
					'profile_url'  => '#',
				),

				array(
					'site_name' => esc_html__( 'Pinterest', 'bizkorp' ),
					'site_icon' => 'fab fa-pinterest-p',
					'profile_url'  => '#',
				),
			),
		),
	)
) );
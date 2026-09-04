<?php
//Project Option
CSF::createSection( $bizkorp_theme_option, array(
	'title'  => esc_html__( 'Project Options', 'bizkorp' ),
	'id'     => 'project_options',
	'icon'   => 'fa fa-th',
	'fields' => array(
		array(
			'id'      => 'project_default_layout',
			'type'    => 'select',
			'title'   => esc_html__('Project Layout', 'bizkorp'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'bizkorp'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'bizkorp'),
				'right-sidebar' => esc_html__('Right Sidebar', 'bizkorp'),
			),
			'default' => 'full-width',
			'desc'    => esc_html__('Select project layout.', 'bizkorp'),
		),

		array(
			'id'         => 'project_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'bizkorp' ),
			'options'    => 'bizkorp_sidebars',
			'default' => 'bizkorp-project-sidebar',
			'dependency' => array( 'project_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all projects. You can override this settings on individual project.', 'bizkorp' ),
		),

		array(
			'id'    => 'project_url_slug',
			'type'  => 'text',
			'default' => 'project',
			'title' => esc_html__( 'URL Slug', 'bizkorp' ),
			'desc'  => esc_html__( 'Change project slug on URL. Don\'t forget to reset permalink after change this.', 'bizkorp' ),
		),

	)
) );
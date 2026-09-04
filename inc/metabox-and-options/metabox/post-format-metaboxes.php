<?php
// Video Post Meta
$bizkorp_video_post_meta = 'video_post_format_meta';

CSF::createMetabox( $bizkorp_video_post_meta, array(
	'title'        => esc_html__('Video Post Format Options', 'bizkorp' ),
	'post_type'    => 'post',
	'post_formats' => array('video'),
) );

CSF::createSection( $bizkorp_video_post_meta, array(
	'fields' => array(

		array(
			'id'    => 'post_video_url',
			'type'  => 'text',
			'title' => esc_html__('Video URL', 'bizkorp' ),
			'desc'    => esc_html__( 'Paste video URL here', 'bizkorp' ),
		),

	)
));

// Audio Post Meta
$bizkorp_audio_post_meta = 'audio_post_format_meta';

CSF::createMetabox( $bizkorp_audio_post_meta, array(
	'title'        => esc_html__('Audio Post Format Options', 'bizkorp' ),
	'post_type'    => 'post',
	'post_formats' => array('audio'),
) );

CSF::createSection( $bizkorp_audio_post_meta, array(
	'fields' => array(

		array(
			'id'    => 'audio_embed_code',
			'type'  => 'code_editor',
			'settings' => array(
				'theme'  => 'monokai',
				'mode'   => 'htmlmixed',
			),
			'title' => esc_html__('Audio Embed Code', 'bizkorp' ),
			'desc'    => esc_html__( 'Paste sound cloud audio embed code here', 'bizkorp' ),
		),

	)
));


// Gallery Post Meta
$bizkorp_gallery_post_meta = 'gallery_post_format_meta';

CSF::createMetabox( $bizkorp_gallery_post_meta, array(
	'title'        => esc_html__('Gallery Post Format Options', 'bizkorp' ),
	'post_type'    => 'post',
	'post_formats' => array('gallery'),
) );

CSF::createSection( $bizkorp_gallery_post_meta, array(
	'fields' => array(

		array(
			'id'          => 'post_gallery_images',
			'type'        => 'gallery',
			'title' => esc_html__('Gallery Images', 'bizkorp' ),
			'add_title'   => esc_html__('Upload Gallery Images', 'bizkorp'),
			'edit_title'  => esc_html__('Edit Gallery Images', 'bizkorp'),
			'clear_title' => esc_html__('Remove Gallery Images', 'bizkorp'),
			'desc'    => esc_html__( 'Upload gallery images from here', 'bizkorp' ),
		),

	)
));
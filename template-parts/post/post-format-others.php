<?php if (has_post_thumbnail()) :
	$enable_image_link = bizkorp_option('featured_image_link', true);
	?>
    <div class="post-thumbnail-wrapper">
		<?php if (!is_singular('post') && $enable_image_link == true) : ?>
        <a href="<?php echo get_the_permalink() ?>">
			<?php endif; ?>
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'bizkorp-large') ?>"
                 alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
			<?php if (!is_singular('post') && $enable_image_link == true) : ?>
        </a>
	<?php endif; ?>
    </div>
<?php endif; ?>
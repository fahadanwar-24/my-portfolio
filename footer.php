<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bizkorp
 */

if ( is_page() || is_singular( 'post' ) || bizkorp_custom_post_types() && get_post_meta( $post->ID, 'bizkorp_common_meta', true ) ) {
	$common_meta = get_post_meta( $post->ID, 'bizkorp_common_meta', true );
} else {
	$common_meta = array();
}

if ( is_array( $common_meta ) && array_key_exists( 'footer_style_meta', $common_meta ) && $common_meta['footer_style_meta'] != '' && $common_meta['footer_style_meta'] != 'default' ) {
	$footer_query = new WP_Query( [
		'post_type'      => 'bizkorp_footer',
		'posts_per_page' => -1,
		'p'              => $common_meta['footer_style_meta'],
	] );

} elseif(!empty(bizkorp_option('site_default_footer'))){
	$footer_query = new WP_Query( [
		'post_type'      => 'bizkorp_footer',
		'posts_per_page' => -1,
		'p'              => bizkorp_option('site_default_footer'),
	] );
}else{
	$footer_query = '';
}


$go_to_top = bizkorp_option('go_to_top_button', false);
?>

</div><!-- #content -->

<footer class="site-footer">
	<?php if(!empty($footer_query) && $footer_query->have_posts()) : ?>
		<?php
		while ( $footer_query->have_posts() ) : $footer_query->the_post();
			the_content();
		endwhile;
		wp_reset_postdata();
		?>
	<?php else: ?>

		<?php get_template_part( 'template-parts/footer/footer-widgets'); ?>

        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bottom-wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="site-info-left">
										<?php
										$footer_info_left_text = bizkorp_option('footer_info_left_text');
										echo wp_kses($footer_info_left_text, bizkorp_allow_html());
										?>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="site-copyright-text">
										<?php
										$copyright_text = bizkorp_option('copyright_text');

										echo wp_kses($copyright_text, bizkorp_allow_html());
										?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php endif; ?>

	<?php if($go_to_top == true) :
		$go_top_icon = bizkorp_option('go_top_icon');
		?>
        <div class="scroll-to-top td-primary-bg"><i class="<?php echo esc_attr($go_top_icon);?>"></i></div>
	<?php endif;?>
</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
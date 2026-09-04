<?php
$related_post_title = bizkorp_option('related_post_title', 'Related Posts');
$read_more_text = bizkorp_option('blog_read_more_text');
function bizkorp_get_related_posts($post_id, $related_count, $args = array()) {
	$terms = get_the_terms($post_id, 'category');

	if (empty($terms)) $terms = array();

	$term_list = wp_list_pluck($terms, 'slug');

	$related_args = array(
		'post_type'      => 'post',
		'posts_per_page' => $related_count,
		'post_status'    => 'publish',
		'post__not_in'   => array($post_id),
		'orderby'        => 'rand',
		'tax_query'      => array(
			array(
				'taxonomy' => 'category',
				'field'    => 'slug',
				'terms'    => $term_list
			)
		)
	);

	return new WP_Query($related_args);
}

$related = bizkorp_get_related_posts( get_the_ID(), 3 );
if($related->have_posts()) :?>
    <div class="row related-post-wrapper">
	    <div class="col-12">
	        <h5 class="td-related-post-title"><?php echo esc_html($related_post_title); ?></h5>
	        <div class="row">
	            <?php
	            while ($related->have_posts()): $related->the_post(); ?>
	                <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-post-wrapper">
                            <div class="post-thumbnail-wrapper">
                                <a href="<?php echo esc_url(get_the_permalink()); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'bizkorp-large') ?>"
                                         alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                                </a>
                            </div>

                            <div class="post-content-wrapper">
                                <div class="post-meta td-list-style td-list-inline">
                                    <ul>
                                        <li><?php bizkorp_posted_by(); ?></li>
                                        <li><?php bizkorp_posted_on(); ?></li>
                                    </ul>
                                </div>

                                <h3 class="post-title">
                                    <a href="<?php echo esc_url(get_the_permalink()); ?>">
                                        <?php echo wp_trim_words(get_the_title(), 8, ' ...'); ?>
                                    </a>
                                </h3>

                                <div class="post-read-more">
                                    <a class="td-text-button" href="<?php echo esc_url(get_the_permalink()); ?>">
	                                    <?php echo esc_html($read_more_text);?><i class="icon-button-arrow-one"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
	                </div>
	            <?php
	            endwhile;
	            wp_reset_query();
	            wp_reset_postdata();
	            ?>
	        </div>
	    </div>
    </div>
<?php endif;?>
<?php
if(is_archive()){
	$post_item_layout = bizkorp_option('archive_layout', 'right-sidebar');
}else if(is_search()){
	$post_item_layout = bizkorp_option('search_layout', 'right-sidebar');
}else{
	$post_item_layout = bizkorp_option('blog_layout', 'right-sidebar');
}

$show_author_name = bizkorp_option('post_author', true);
$show_post_date = bizkorp_option('post_date', true);
$show_comment_number = bizkorp_option('cmnt_number', true);
$show_category = bizkorp_option('show_category', true);
$show_read_more = bizkorp_option('read_more_button', true);
$show_excerpt = bizkorp_option('show_excerpt', true);

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-post-wrapper <?php if($post_item_layout == 'list-view'){echo 'row';} ?>">
        
        <?php if($post_item_layout == 'list-view') : ?>
        <div class="col-xl-6">
        <?php endif; ?>
		<?php
            if(get_post_format() === 'gallery'){
	            get_template_part( 'template-parts/post/post-format-gallery');
            }else if(get_post_format() === 'video'){
	            get_template_part( 'template-parts/post/post-format-video');
            }else if(get_post_format() === 'audio'){
	            get_template_part( 'template-parts/post/post-format-audio');
            }else{
	            get_template_part( 'template-parts/post/post-format-others');
            }
        ?>
        <?php if($post_item_layout == 'list-view') : ?>
        </div>
        <?php endif; ?>

		<?php if($post_item_layout == 'list-view') : ?>
        <div class="col-xl-6">
        <?php endif; ?>
		<div class="post-content-wrapper">

			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="post-meta td-list-style td-list-inline">
					<ul>
                        <?php if($show_author_name == true):?>
						<li><?php bizkorp_posted_by(); ?></li>
                        <?php endif; ?>

						<?php if($show_post_date == true):?>
						<li><?php bizkorp_posted_on(); ?></li>
						<?php endif; ?>

                        <?php if ( get_comments_number() != 0 && $show_comment_number == true ) : ?>
                            <li class="comment-number"><?php bizkorp_comment_count(); ?></li>
                        <?php endif; ?>

                        <?php if($show_category == true):?>
                        <li><?php bizkorp_post_first_category(); ?></li>
                        <?php endif;?>
					</ul>
				</div>
			<?php endif; ?>

			<?php
			// ptt ( Post Title Tag);
			$ptt = bizkorp_option('post_title_tag', 'h3');
			the_title( '<'.$ptt.' class="post-title"><a href="' . esc_url( get_the_permalink() ) . '" rel="bookmark">', '</a></'.$ptt.'>' );
            ?>


			<?php if($show_excerpt == true):
				$excerpt_length = bizkorp_option('excerpt_length');

				if(!empty($excerpt_length)){
					$word_count = $excerpt_length;
				}else{
					if($post_item_layout == 'two-column' || $post_item_layout == 'grid-ls' || $post_item_layout == 'grid-rs' || $post_item_layout == 'grid'){
						$word_count = 20;
					}else{
						$word_count = 45;
					}
				}
                ?>
			<div class="post-excerpt">
				<p><?php echo bizkorp_words_limit( get_the_excerpt(), $word_count ); ?><?php if ( ! empty( get_the_content() ) ) {
						echo ' [...]';
					} ?></p>
			</div>
			<?php endif;?>

			<?php if($post_item_layout == 'list-view') : ?>
            <div class="post-tags">
	            <?php
	            $posttags = get_the_tags();
	            $count=0;
	            if ($posttags) {
		            foreach($posttags as $tag) {
			            $count++;
			            echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
			            if( $count == 3 ) break;
		            }
	            }
	            ?>
            </div>
            <?php endif; ?>

			<?php if($show_read_more == true):
				$read_more_text = bizkorp_option('blog_read_more_text');
                ?>
			<div class="post-read-more">
                <?php if($post_item_layout == 'full-width' || $post_item_layout == 'left-sidebar' || $post_item_layout == 'right-sidebar' || $post_item_layout == 'list-view') : ?>
                    <a class="td-button td-gradient-button" href="<?php echo esc_url( get_the_permalink() ) ?>">
	                    <span><?php echo esc_html($read_more_text);?><i class="icon-button-arrow-one"></i></span>
                    </a>
                <?php else : ?>
                    <a class="td-text-button" href="<?php echo esc_url( get_the_permalink() ) ?>">
	                    <?php echo esc_html($read_more_text);?><i class="icon-button-arrow-one"></i>
                    </a>
                <?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
        <?php if($post_item_layout == 'list-view') : ?>
        </div>
	    <?php endif; ?>
	</div>
</article>
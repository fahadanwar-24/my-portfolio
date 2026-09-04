<?php
    $pagination_type = bizkorp_option('blog_pagination_type', 'numeric');
    $pagination_align = bizkorp_option('pagination_align', 'text-start');
?>
<div class="row post-pagination <?php echo esc_attr($pagination_align);?>">
	<div class="col-lg-12 td-list-style">
		<?php
        if($pagination_type == 'numeric'){
	        the_posts_pagination(array(
		        'next_text' => '<i class="icon-button-arrow-one"></i>',
		        'prev_text' => '<i class="icon-button-arrow-one"></i>',
		        'screen_reader_text' => esc_html__('Pagination', 'bizkorp'),
		        'type'                => 'list',
	        ));
        }else{
	        bizkorp_load_more_button();
        }
		?>
	</div>
</div>


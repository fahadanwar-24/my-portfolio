<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bizkorp
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bizkorp' ),
			'after'  => '</div>',
		) );
		?>
    </div><!-- .entry-content -->

</div><!-- #post-<?php the_ID(); ?> -->
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bizkorp
 */

get_header();

$error_banner      = bizkorp_option('error_banner', true);
$error_banner_title = bizkorp_option('error_page_title');
$banner_text_align = bizkorp_option('banner_default_text_align', 'center');
$not_found_text     = bizkorp_option('not_found_text');
$go_back_home       = bizkorp_option('go_back_home', true);
?>

<?php if($error_banner == true) : ?>
    <div class="banner-area error-page-banner">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 my-auto">
                    <div class="banner-content text-<?php echo esc_attr( $banner_text_align ); ?>">
                        <h2 class="banner-title">
							<?php echo esc_html($error_banner_title); ?>
                        </h2>

						<?php if ( function_exists( 'bcn_display' ) ) :?>
                            <div class="breadcrumb-container">
								<?php bcn_display();?>
                            </div>
						<?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


    <div id="primary" class="content-area">
        <div class="container not-found-content">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="not-found-text-wrapper">

                        <div class="text-404">
                            <h4><?php echo esc_html__('404', 'bizkorp') ?></h4>
                        </div>

						<?php
						echo wp_kses( $not_found_text, bizkorp_allow_html() );
						?>

						<?php if ($go_back_home == true) : ?>
                            <div class="error-page-button">
                                <a class="td-button" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__('Back To Home', 'bizkorp') ?><i aria-hidden="true" class="icon-button-arrow-one"></i></a>
                            </div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #primary -->

<?php
get_footer();
<?php if (!defined('ABSPATH')) {
	die;
} // Cannot access directly. ?>

<div class="wrap bizkorp-wrap">

    <div class="bizkorp-admin-page-header">

        <div class="bizkorp-admin-page-header-text">
            <h1><?php esc_html_e('Welcome to Bizkorp!', 'bizkorp'); ?></h1>
            <p><?php esc_html_e('Bizkorp is a creative business agency WordPress theme.', 'bizkorp'); ?></p>
        </div>

        <div class="bizkorp-admin-page-header-logo">
            <img src="<?php echo get_theme_file_uri('inc/admin/assets/images/admin-logo.png'); ?>"/>
            <strong>V-<?php echo wp_get_theme()->get('Version'); ?></strong>
        </div>
    </div>

    <div class="bizkorp-admin-boxes">

        <div class="bizkorp-admin-box">

            <div class="bizkorp-admin-box-header">
                <h2><?php esc_html_e('Theme Documentation', 'bizkorp'); ?></h2>
            </div>

            <div class="bizkorp-admin-box-inside">
                <p><?php esc_html_e('You can find everything about theme settings. See our online documentation.', 'bizkorp'); ?></p>
                <a href="https://docs.themedraft.net/wp/bizkorp" target="_blank"
                   class="button"><?php esc_html_e('Go to Documentation', 'bizkorp'); ?></a>
            </div>

        </div>

        <div class="bizkorp-admin-box">
            <div class="bizkorp-admin-box-header">
                <h2><?php esc_html_e('Theme Support', 'bizkorp'); ?></h2>
            </div>

            <div class="bizkorp-admin-box-inside">
                <p><?php esc_html_e('Do you need help? Feel to free ask any question.', 'bizkorp'); ?></p>
                <a href="https://themeforest.net/item/bizkorp-creative-business-agency-wordpress-theme/58239108/support" target="_blank"
                   class="button"><?php esc_html_e('Item Support Form', 'bizkorp'); ?></a>
            </div>
        </div>
    </div>

</div>
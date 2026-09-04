<?php
$preloader_three_big_text = bizkorp_option('preloader_three_big_text');
$preloader_three_big_text_letters = str_split(strtoupper($preloader_three_big_text));
$preloader_three_small_text = bizkorp_option('preloader_three_small_text');
?>
<div class="text-preloader-wrapper">
    <div id="text-preloader" class="text-preloader">
        <div class="preloader-content">
            <div class="preloader-spinner"></div>

            <div class="txt-loading">
				<?php
				foreach ($preloader_three_big_text_letters as $letter) {
					echo '<span data-text-preloader="' . esc_html($letter) . '" class="letters-loading">' . esc_html($letter) . '</span>';
				}
				?>
            </div>

            <p class="small-loading"><?php echo esc_html($preloader_three_small_text);?></p class="text-center">
        </div>
    </div>
</div>

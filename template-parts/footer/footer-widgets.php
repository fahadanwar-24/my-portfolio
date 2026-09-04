<?php
if(is_active_sidebar('bizkorp-footer-widget')) :
    ?>
	<div class="footer-widget-area td-cover-bg">
		<div class="container">
			<div class="row">
				<?php dynamic_sidebar( "bizkorp-footer-widget" ) ?>
			</div>
		</div>
	</div>
<?php endif;?>
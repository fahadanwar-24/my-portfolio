(function( $ ) {
	"use strict";
	$('#td-load-more-post').on('click', function(){

		var $gridLayout = $('.all-posts-wrapper');

		var button = $(this),
			data = {
				'action': 'loadmore',
				'query': bizkorp_loadmore.posts, // that's how we get params from wp_localize_script() function
				'page' : bizkorp_loadmore.current_page,
				'nonce': bizkorp_loadmore.nonce,
			};

		$.ajax({
			url : bizkorp_loadmore.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.addClass('loading'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) {

					var $data = $(data);

					setTimeout(function () {
						$gridLayout.append($data).masonry('appended', $data);
						$gridLayout.imagesLoaded().progress(function () {
							$gridLayout.masonry('layout');
						});
						button.removeClass('loading');

						bizkorp_loadmore.current_page++;

						if (bizkorp_loadmore.current_page == bizkorp_loadmore.max_page)
							button.remove(); // if last page, remove the button

					}, 300);

				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	});

})(jQuery);
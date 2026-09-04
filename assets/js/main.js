(function ($) {
    "use strict";

    /*====  Document Ready Function =====*/
    jQuery(document).ready(function ($) {

        // Scroll To Top
        $(window).on("scroll", function () {
            var pagescroll = $(window).scrollTop();
            if (pagescroll > 100) {
                $(".scroll-to-top").addClass("scroll-to-top-visible");

            } else {
                $(".scroll-to-top").removeClass("scroll-to-top-visible");
            }
        });

        $(".scroll-to-top").on("click", function () {
            $("html, body").animate({scrollTop: 0}, "slow");
            return false;
        });

        //Mobile Menu
        $("#main-menu").slicknav({
            allowParentLinks: true,
            prependTo: '#mobile-menu-wrap',
            label: 'Menu',
        });

        $(".mobile-menu-trigger").on("click", function (e) {
            $(".mobile-menu-container").addClass("menu-open");
            e.stopPropagation();
        });

        $(".mobile-menu-close").on("click", function (e) {
            $(".mobile-menu-container").removeClass("menu-open");
            e.stopPropagation();
        });

        //Grid Post Masonry
        $('.layout-right-sidebar .all-posts-wrapper,.layout-left-sidebar .all-posts-wrapper,.layout-list-view .all-posts-wrapper,.layout-full-width .all-posts-wrapper,.layout-two-column .all-posts-wrapper,.layout-grid .all-posts-wrapper, .layout-grid-rs .all-posts-wrapper, .layout-grid-ls .all-posts-wrapper').imagesLoaded(function () {
            $('.layout-right-sidebar .all-posts-wrapper,.layout-left-sidebar .all-posts-wrapper,.layout-list-view .all-posts-wrapper,.layout-full-width .all-posts-wrapper,.layout-two-column .all-posts-wrapper,.layout-grid .all-posts-wrapper, .layout-grid-rs .all-posts-wrapper, .layout-grid-ls .all-posts-wrapper').masonry({
                itemSelector: '.single-post-item',
                percentPosition: false,
                transitionDuration: '.8s',
                masonry: {
                    columnWidth: 1
                }
            });
        });

        // Gallery Post Slider
        $('.post-gallery-slider').slick({
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 1500,
            dots: true,
            arrows: true,
            prevArrow: '<i class="slick-arrow slick-prev fas fa-angle-double-left"></i>',
            nextArrow: '<i class="slick-arrow slick-next fas fa-angle-double-right"></i>',
        });

        // Popup Video
        $(".td-theme-video-button").magnificPopup({
            type: 'video'
        });

        // Popup Image
        $('.td-popup-image').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });

        // Post Print
        $(document).on('click', '.print-button', function (e) {
            console.log();
            e.preventDefault();
            window.print();
            return false;
        });

        // WooCommerce Shop view
        $('#td-shop-view-mode li').on('click', function () {
            $('body').removeClass('td-product-grid-view').removeClass('td-product-list-view');

            if ($(this).hasClass('td-shop-list')) {
                $('body').addClass('td-product-list-view');
                Cookies.set('td-shop-view', 'list');
            } else {
                $('body').addClass('td-product-grid-view');
                Cookies.remove('td-shop-view');
            }
            return false;
        });

        $('[class*="td-"] svg').removeAttr('height width');

        //$('.td-shop-page-add-to-cart a').empty();
        $(".related.products .products, .upsells.products .products").slick({
            slidesToShow: 4,//relater_product_data.slide_column,
            autoplay: true,
            autoplaySpeed: "5000", //interval
            speed: 1500, // slide speed
            dots: false,
            arrows: true,
            prevArrow: '<i class="slick-arrow slick-prev icon-button-arrow-one"></i>',
            nextArrow: '<i class="slick-arrow slick-next icon-button-arrow-one"></i>',
            infinite: true,
            pauseOnHover: false,
            centerMode: false,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        arrows: true,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2, //768-991
                        arrows: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1, // 0 -767
                        arrows: false,
                    }
                }
            ]
        });


        // Product Gallery Slider
        $(".td-woo-product-slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 4000, //interval
            speed: 1500, // slide speed
            dots: false,
            arrows: false,
            prevArrow: '<i class="slick-arrow slick-prev icon-button-arrow-one"></i>',
            nextArrow: '<i class="slick-arrow slick-next icon-button-arrow-one"></i>',
            infinite: true,
            fade: true,
            pauseOnHover: false,
            centerMode: false,
            asNavFor: '.td-woo-product-slider-nav'
        });

        $(".td-woo-product-slider-nav").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 4000, //interval
            speed: 1500, // slide speed
            dots: false,
            arrows: false,
            infinite: true,
            pauseOnHover: false,
            centerMode: true,
            centerPadding: '0px',
            asNavFor: '.td-woo-product-slider',
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3, //768-991
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3, // 0 -767
                    }
                }
            ]
        });

        new WOW().init();

        //>> Mouse Cursor Start <<//
        function mousecursor() {
            const e = document.querySelector(".cursor-inner"),
                t = document.querySelector(".cursor-outer");
            let n, i = 0, o = false;

            if (!e || !t) return; // Ensure elements exist before running

            // Initially hide the mouse cursor
            e.style.visibility = "hidden";
            t.style.visibility = "hidden";

            window.addEventListener("mousemove", function(s) {
                if (!o) {
                    t.style.transform = `translate(${s.clientX}px, ${s.clientY}px)`;
                }
                e.style.transform = `translate(${s.clientX}px, ${s.clientY}px)`;
                n = s.clientY;
                i = s.clientX;

                // Show cursor when mouse moves inside the body
                e.style.visibility = "visible";
                t.style.visibility = "visible";
            });

            $("body").on("mouseenter", "a, .cursor-pointer", function() {
                e.classList.add("cursor-hover");
                t.classList.add("cursor-hover");
            });

            $("body").on("mouseleave", "a, .cursor-pointer", function() {
                if (!($(this).is("a") && $(this).closest(".cursor-pointer").length)) {
                    e.classList.remove("cursor-hover");
                    t.classList.remove("cursor-hover");
                }
            });

            // Hide cursor when mouse leaves the document
            document.addEventListener("mouseleave", function () {
                e.style.visibility = "hidden";
                t.style.visibility = "hidden";
            });

            // Show cursor when mouse enters the document
            document.addEventListener("mouseenter", function () {
                e.style.visibility = "visible";
                t.style.visibility = "visible";
            });
        }

        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".mouse-cursor").forEach(el => {
                el.style.visibility = "hidden"; // Ensure cursor is hidden initially
            });
        });

        $(function() {
            mousecursor();
        });


    });



    /*====  Window Load Function =====*/
    jQuery(window).on('load', function () {
        //Preloader
        $('.preloader-wrapper').delay(1000).fadeOut('slow');
        setTimeout(function () {
            $('.site').addClass('loaded');
        }, 500);

        if ($('#text-preloader').length) {
            $('#text-preloader').fadeOut();
            $('.text-preloader-wrapper').delay(500).fadeOut('slow');
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.main-navigation .menu-item-has-children > a').forEach(function (link) {
            // Create span
            const span = document.createElement('span');
            span.classList.add('bizkorp-submenu-toggle');
            // Append inside <a>
            link.appendChild(span);
        });
    });

}(jQuery));
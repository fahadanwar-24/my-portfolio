@extends('frontend.layouts.app')
@section('title', 'Blog Carousel')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerFour')
    <!-- header area end -->
       
   
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h3>Blog Carousel</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Blog Carousel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Carousel Page Start -->
        <section class="blog-page blog-carousel-page">
            <div class="container">
                <div class="swiper-container blog-carousel-page__carousel carousel-page-dot-style">
                    <div class="swiper-wrapper">
                        <!--Blog Two Single Start-->
                        <div class="swiper-slide">
                            <div class="blog-two__single">
                                <div class="blog-two__img-box">
                                    <div class="blog-two__img">
                                        <img src="{{ asset('/assets/images/blog/blog-2-1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="blog-two__content">
                                    <div class="blog-two__date-and-comment">
                                        <div class="blog-two__date">
                                            <p>13<br><span>/may</span></p>
                                        </div>
                                        <div class="blog-two__comment">
                                            <p><span class="icon-comments"></span> 05 Comment</p>
                                        </div>
                                    </div>
                                    <h3 class="blog-two__title"><a href="{{ route('blogDetails') }}">The Power of Local SEO How
                                            to
                                            Rank
                                            Higher in Your Area</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog Two Single End-->
                        <!--Blog Two Single Start-->
                        <div class="swiper-slide">
                            <div class="blog-two__single">
                                <div class="blog-two__img-box">
                                    <div class="blog-two__img">
                                        <img src="{{ asset('/assets/images/blog/blog-2-2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="blog-two__content">
                                    <div class="blog-two__date-and-comment">
                                        <div class="blog-two__date">
                                            <p>16<br><span>/may</span></p>
                                        </div>
                                        <div class="blog-two__comment">
                                            <p><span class="icon-comments"></span> 05 Comment</p>
                                        </div>
                                    </div>
                                    <h3 class="blog-two__title"><a href="{{ route('blogDetails') }}">Email Marketing Best
                                            Practices
                                            for Small Businesses</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog Two Single End-->
                        <!--Blog Two Single Start-->
                        <div class="swiper-slide">
                            <div class="blog-two__single">
                                <div class="blog-two__img-box">
                                    <div class="blog-two__img">
                                        <img src="{{ asset('/assets/images/blog/blog-2-3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="blog-two__content">
                                    <div class="blog-two__date-and-comment">
                                        <div class="blog-two__date">
                                            <p>20<br><span>/may</span></p>
                                        </div>
                                        <div class="blog-two__comment">
                                            <p><span class="icon-comments"></span> 05 Comment</p>
                                        </div>
                                    </div>
                                    <h3 class="blog-two__title"><a href="{{ route('blogDetails') }}">The Role of Influencer
                                            Marketing
                                            in Building Brand Awareness</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog Two Single End-->
                        <!--Blog Two Single Start-->
                        <div class="swiper-slide">
                            <div class="blog-two__single">
                                <div class="blog-two__img-box">
                                    <div class="blog-two__img">
                                        <img src="{{ asset('/assets/images/blog/blog-2-4.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="blog-two__content">
                                    <div class="blog-two__date-and-comment">
                                        <div class="blog-two__date">
                                            <p>13<br><span>/may</span></p>
                                        </div>
                                        <div class="blog-two__comment">
                                            <p><span class="icon-comments"></span> 05 Comment</p>
                                        </div>
                                    </div>
                                    <h3 class="blog-two__title"><a href="{{ route('blogDetails') }}">The Power of Local SEO How
                                            to
                                            Rank
                                            Higher in Your Area</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog Two Single End-->
                        <!--Blog Two Single Start-->
                        <div class="swiper-slide">
                            <div class="blog-two__single">
                                <div class="blog-two__img-box">
                                    <div class="blog-two__img">
                                        <img src="{{ asset('/assets/images/blog/blog-2-5.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="blog-two__content">
                                    <div class="blog-two__date-and-comment">
                                        <div class="blog-two__date">
                                            <p>16<br><span>/may</span></p>
                                        </div>
                                        <div class="blog-two__comment">
                                            <p><span class="icon-comments"></span> 05 Comment</p>
                                        </div>
                                    </div>
                                    <h3 class="blog-two__title"><a href="{{ route('blogDetails') }}">Email Marketing Best
                                            Practices
                                            for Small Businesses</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog Two Single End-->
                        <!--Blog Two Single Start-->
                        <div class="swiper-slide">
                            <div class="blog-two__single">
                                <div class="blog-two__img-box">
                                    <div class="blog-two__img">
                                        <img src="{{ asset('/assets/images/blog/blog-2-6.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="blog-two__content">
                                    <div class="blog-two__date-and-comment">
                                        <div class="blog-two__date">
                                            <p>20<br><span>/may</span></p>
                                        </div>
                                        <div class="blog-two__comment">
                                            <p><span class="icon-comments"></span> 05 Comment</p>
                                        </div>
                                    </div>
                                    <h3 class="blog-two__title"><a href="{{ route('blogDetails') }}">The Role of Influencer
                                            Marketing
                                            in Building Brand Awareness</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog Two Single End-->
                    </div>
                    <div class="swiper-nav-style-one">
                        <div class="swiper-dot-style1"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Carousel Page End -->

            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
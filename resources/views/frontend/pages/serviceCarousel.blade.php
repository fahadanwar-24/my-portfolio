@extends('frontend.layouts.app')
@section('title', 'Services Carousel')
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
                    <h3>Services Carousel</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Services Carousel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!-- Services Carousel Page Start -->
        <section class="services-three services-page services-carousel-page">
            <div class="container">
                <div class="swiper-container services-carousel-page__carousel carousel-page-dot-style">
                    <div class="swiper-wrapper">
                        <!--Services Three Single Start-->
                        <div class="swiper-slide">
                            <div class="services-three__single">
                                <div class="services-three__single-bg"
                                    style="background-image: url(assets/images/shapes/services-three-single-bg.jpg);">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__icon">
                                    <span class="icon-market"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('serviceDetails') }}">UI/UX Design from
                                        Professionals</a></h3>
                                <p class="services-three__text">Enhance your online visibility drive organic traffic
                                    with
                                    our advance techniques. We optimize your website to rank higher.</p>
                                <div class="services-three__read-more">
                                    <a href="{{ route('serviceDetails') }}">Read More<span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single End-->
                        <!--Services Three Single Start-->
                        <div class="swiper-slide">
                            <div class="services-three__single">
                                <div class="services-three__single-bg"
                                    style="background-image: url(assets/images/shapes/services-three-single-bg.jpg);">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__icon">
                                    <span class="icon-agency"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('serviceDetails') }}">Marketing & SEO
                                        <br>Optimization</a></h3>
                                <p class="services-three__text">Enhance your online visibility drive organic traffic
                                    with
                                    our advance techniques. We optimize your website to rank higher.</p>
                                <div class="services-three__read-more">
                                    <a href="{{ route('serviceDetails') }}">Read More<span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single End-->
                        <!--Services Three Single Start-->
                        <div class="swiper-slide">
                            <div class="services-three__single">
                                <div class="services-three__single-bg"
                                    style="background-image: url(assets/images/shapes/services-three-single-bg.jpg);">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__icon">
                                    <span class="icon-branding"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('serviceDetails') }}">Mobile App & Web
                                        <br> Development</a></h3>
                                <p class="services-three__text">Enhance your online visibility drive organic traffic
                                    with
                                    our advance techniques. We optimize your website to rank higher.</p>
                                <div class="services-three__read-more">
                                    <a href="{{ route('serviceDetails') }}">Read More<span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single End-->
                        <!--Services Three Single Start-->
                        <div class="swiper-slide">
                            <div class="services-three__single">
                                <div class="services-three__single-bg"
                                    style="background-image: url(assets/images/shapes/services-three-single-bg.jpg);">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__icon">
                                    <span class="icon-creative"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('serviceDetails') }}">Innovative digital<br>
                                        solution</a></h3>
                                <p class="services-three__text">Enhance your online visibility drive organic traffic
                                    with
                                    our advance techniques. We optimize your website to rank higher.</p>
                                <div class="services-three__read-more">
                                    <a href="{{ route('serviceDetails') }}">Read More<span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single End-->
                        <!--Services Three Single Start-->
                        <div class="swiper-slide">
                            <div class="services-three__single">
                                <div class="services-three__single-bg"
                                    style="background-image: url(assets/images/shapes/services-three-single-bg.jpg);">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__icon">
                                    <span class="icon-creative-2"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('serviceDetails') }}">Branding and<br>
                                        Creative
                                        Services</a></h3>
                                <p class="services-three__text">Enhance your online visibility drive organic traffic
                                    with
                                    our advance techniques. We optimize your website to rank higher.</p>
                                <div class="services-three__read-more">
                                    <a href="{{ route('serviceDetails') }}">Read More<span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single End-->
                        <!--Services Three Single Start-->
                        <div class="swiper-slide">
                            <div class="services-three__single">
                                <div class="services-three__single-bg"
                                    style="background-image: url(assets/images/shapes/services-three-single-bg.jpg);">
                                </div>
                                <div class="services-three__count"></div>
                                <div class="services-three__icon">
                                    <span class="icon-web-design"></span>
                                </div>
                                <h3 class="services-three__title"><a href="{{ route('serviceDetails') }}">Web Design and<br>
                                        Development</a></h3>
                                <p class="services-three__text">Enhance your online visibility drive organic traffic
                                    with
                                    our advance techniques. We optimize your website to rank higher.</p>
                                <div class="services-three__read-more">
                                    <a href="{{ route('serviceDetails') }}">Read More<span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Services Three Single End-->
                    </div>
                    <div class="swiper-nav-style-one">
                        <div class="swiper-dot-style1"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Carousel Page End -->
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
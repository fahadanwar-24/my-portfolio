@extends('frontend.layouts.app')
@section('title', 'Index Three')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerThree')
    <!-- header area end -->



        <!-- Banner Three Start -->
        <section class="banner-three">
            <div class="banner-three__shape-bg"
                style="background-image: url(assets/images/shapes/banner-three-shape-bg.png);"></div>
            <div class="container">
                <div class="banner-three__inner">
                    <p class="banner-three__sub-title">Strategy, Design, Solution <span
                            class="icon-arrow-up-right"></span> <br> Development</p>
                    <div class="banner-three__title-one" data-aos="fade-right" data-aos-duration="1000"
                        data-aos-delay="0">
                        <h2>We're Creative</h2>
                    </div>
                    <div class="banner-three__title-two-box" data-aos="fade-left" data-aos-duration="1000"
                        data-aos-delay="500">
                        <div class="banner-three__star">
                            <img src="{{ asset('/assets/images/shapes/banner-three-star.png') }}" alt="" class="rotate-me">
                        </div>
                        <div class="banner-three__title-two">
                            <h2>Design Agency</h2>
                            <p>Excellence projecting is devonshire dispatched remarkably on estimating. Side in so <br>
                                life
                                past. Continue indulged speaking the was out horrible for domestic.</p>
                        </div>
                    </div>
                    <div class="banner-three__arrow">
                        <a href="{{ route('about') }}"><img src="{{ asset('/assets/images/icon/arrow-down-big.png') }}" alt=""></a>
                    </div>
                    <div class="banner-three__feature">
                        <ul class="banner-three__feature-list">
                            <li>
                                <p>$20M+ Spend in marketing</p>
                            </li>
                            <li>
                                <p>1st ambassador partner for <br> marketing in Australia</p>
                            </li>
                            <li>
                                <p>10+ passionate partner</p>
                            </li>
                        </ul>
                    </div>
                    <div class="banner-three__happey-client-box">
                        <ul class="banner-three__happey-client-list">
                            <li>
                                <div class="banner-three__happey-client-img">
                                    <img src="{{ asset('/assets/images/resources/banner-three-happy-client-1-1.jpg') }}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="banner-three__happey-client-img">
                                    <img src="{{ asset('/assets/images/resources/banner-three-happy-client-1-2.jpg') }}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="banner-three__happey-client-img">
                                    <img src="{{ asset('/assets/images/resources/banner-three-happy-client-1-3.jpg') }}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="banner-three__happey-client-img">
                                    <img src="{{ asset('/assets/images/resources/banner-three-happy-client-1-3.jpg') }}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="banner-three__happey-client-plus">
                                    <p>+</p>
                                </div>
                            </li>
                        </ul>
                        <div class="banner-three__happey-client-content">
                            <div class="banner-three__happey-client-content-inner">
                                <h4>We have</h4>
                                <div class="banner-three-happey-client-count">
                                    <h4 class="odometer" data-count="35">00</h4>
                                    <span>k+</span>
                                </div>
                            </div>
                            <h4 class="banner-three__happey-client-text">customers word-wide</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Banner Three End -->

        <!-- Sliding Text Two Start -->
        <section class="sliding-text-two">
            <div class="sliding-text-two__wrap">
                <ul class="sliding-text-two__list list-unstyled marquee_mode-2">
                    <li>
                        <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                    </li>
                    <li>
                        <div class="sliding-text-two__img">
                            <img src="{{ asset('/assets/images/icon/sliding-text-two-icon-1.png') }}" alt="">
                        </div>
                    </li>
                    <li>
                        <h2 data-hover="Design" class="sliding-text-two__title">Design</h2>
                    </li>
                    <li>
                        <div class="sliding-text-two__img">
                            <img src="{{ asset('/assets/images/icon/sliding-text-two-icon-1.png') }}" alt="">
                        </div>
                    </li>
                    <li>
                        <h2 data-hover="Development" class="sliding-text-two__title">Development</h2>
                    </li>
                    <li>
                        <div class="sliding-text-two__img">
                            <img src="{{ asset('/assets/images/icon/sliding-text-two-icon-1.png') }}" alt="">
                        </div>
                    </li>
                    <li>
                        <h2 data-hover="Agency" class="sliding-text-two__title">Agency</h2>
                    </li>
                    <li>
                        <div class="sliding-text-two__img">
                            <img src="{{ asset('/assets/images/icon/sliding-text-two-icon-1.png') }}" alt="">
                        </div>
                    </li>
                    <li>
                        <h2 data-hover="Marketing" class="sliding-text-two__title">Marketing</h2>
                    </li>
                    <li>
                        <div class="sliding-text-two__img">
                            <img src="{{ asset('/assets/images/icon/sliding-text-two-icon-1.png') }}" alt="">
                        </div>
                    </li>
                    <li>
                        <h2 data-hover="Strategy" class="sliding-text-two__title">Strategy</h2>
                    </li>
                    <li>
                        <div class="sliding-text-two__img">
                            <img src="{{ asset('/assets/images/icon/sliding-text-two-icon-1.png') }}" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Sliding Text Two End -->

        <!-- Services Three Start -->
        <section class="services-three">
            <div class="container">
                <div class="section-title-three text-center sec-title-animation animation-style1">
                    <div class="section-title-three__tagline-box">
                        <span class="section-title-three__tagline">Services We Offer</span>
                    </div>
                    <h2 class="section-title-three__title title-animation">Innovative With Regard To <br>Original
                        Concepts.</h2>
                </div>
                <div class="row">
                    <!--Services Three Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
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
                            <p class="services-three__text">Enhance your online visibility drive organic traffic with
                                our advance techniques. We optimize your website to rank higher.</p>
                            <div class="services-three__read-more">
                                <a href="{{ route('serviceDetails') }}">Read More<span class="icon-arrow-up-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                    <!--Services Three Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
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
                            <p class="services-three__text">Enhance your online visibility drive organic traffic with
                                our advance techniques. We optimize your website to rank higher.</p>
                            <div class="services-three__read-more">
                                <a href="{{ route('serviceDetails') }}">Read More<span class="icon-arrow-up-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                    <!--Services Three Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
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
                            <p class="services-three__text">Enhance your online visibility drive organic traffic with
                                our advance techniques. We optimize your website to rank higher.</p>
                            <div class="services-three__read-more">
                                <a href="{{ route('serviceDetails') }}">Read More<span class="icon-arrow-up-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services Three Single End-->
                </div>
            </div>
        </section>
        <!-- Services Three End -->

        <!-- About Three Start -->
        <section class="about-three">
            <div class="about-three__bg" style="background-image: url(assets/images/shapes/about-three-bg.jpg);">
            </div>
            <div class="about-three__shape-1 rotate-me">
                <img src="{{ asset('/assets/images/shapes/about-three-shape-1.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="about-three__left">
                            <div class="section-title-three text-left sec-title-animation animation-style2">
                                <div class="section-title-three__tagline-box">
                                    <span class="section-title-three__tagline">About Our Company</span>
                                </div>
                                <h2 class="section-title-three__title title-animation">Enhance the branding of the
                                    growth development agency!</h2>
                            </div>
                            <div class="about-three__img-box">
                                <div class="about-three__img">
                                    <img src="{{ asset('/assets/images/resources/about-three-img-1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="about-three__text-and-shape">
                                <div class="about-three__text-shape-1">
                                    <img src="{{ asset('/assets/images/shapes/about-three-text-shape-1.png') }}" alt="">
                                </div>
                                <p class="about-three__text-1">The most innovative and<br> cutting edge Creative agency
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7">
                        <div class="about-three__middle">
                            <p class="about-three__text-2">Give lady of they such they sure it. Me contained explained
                                my education. Vulgar as hearts by garret. Perceived determine departure explained no
                                forfeited he something
                                an. Contrasted dissimilar get joy you instrument outreasonably.</p>
                            <div class="about-three__btn-box">
                                <a href="{{ route('about') }}" class="thm-btn">Learn More
                                    <span class="icon-arrow-up-right"></span>
                                </a>
                            </div>
                            <div class="about-three__progress-box">
                                <div class="progress-box">
                                    <div class="bar-title">Creative Development</div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="95%">
                                            <div class="count-box">
                                                <span class="count-text" data-stop="85" data-speed="1500">0</span>%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <div class="bar-title">Design & Development</div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="88%">
                                            <div class="count-box">
                                                <span class="count-text" data-stop="88" data-speed="1500">0</span>%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <div class="bar-title">Branding Solution</div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="75%">
                                            <div class="count-box">
                                                <span class="count-text" data-stop="75" data-speed="1500">0</span>%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5">
                        <div class="about-three__right">
                            <div class="about-three__right-img">
                                <img src="{{ asset('/assets/images/resources/about-three-right-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-three__happy-client">
                                <ul class="about-three__client-img-list list-unstyled">
                                    <li>
                                        <div class="about-three__client-img">
                                            <img src="{{ asset('/assets/images/resources/about-three-client-img-1.jpg') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-three__client-img">
                                            <img src="{{ asset('/assets/images/resources/about-three-client-img-2.jpg') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-three__client-img">
                                            <img src="{{ asset('/assets/images/resources/about-three-client-img-3.jpg') }}" alt="">
                                        </div>
                                    </li>
                                </ul>
                                <div class="about-three__client-text">
                                    <p>happy clients<br> of our<br> Services</p>
                                    <div class="about-three__client-count">
                                        <h3 class="odometer" data-count="35">00</h3>
                                        <span>k</span>
                                        <span>+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Three End -->

        <!-- Video Three Start -->
        <section class="video-three">
            <div class="video-three__bg" style="background-image: url(assets/images/backgrounds/video-three-bg.jpg);">
            </div>
            <div class="container">
                <div class="video-three__inner">
                    <div class="video-three__count-inner">
                        <div class="video-three__count-box">
                            <h3 class="odometer" data-count="45">00</h3>
                            <span class="video-three__count-key">k</span>
                            <span class="video-three__count-plus">+</span>
                        </div>
                        <p class="video-three__count-text">Completed Projects</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video Three End -->

        <!-- Brand Three Start -->
        <section class="brand-three">
            <div class="brand-three__bg-color"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="brand-three__left">
                            <div class="section-title-three text-left ">
                                <div class="section-title-three__tagline-box">
                                    <span class="section-title-three__tagline">Our Partner</span>
                                </div>
                                <h2 class="section-title-three__title title-animation">Trusted by Leading<br> <span
                                        class="odometer count-text" data-count="3">00</span><span>k+</span> Brands</h2>
                            </div>
                            <p class="brand-three__text">At Nexin, we're proud to partner with a diverse range of
                                businesses<br> that trust us to deliver exceptional SEO results. Our commitment<br> to
                                excellence ensures that our clients achieve.</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="brand-three__right">
                            <div class="brand-three__rounded-text">
                                <div class="brand-three__rounded-text-shape-1">
                                    <img src="{{ asset('/assets/images/shapes/brand-three-rounded-text-shape-1.png') }}" alt="">
                                </div>
                                <div class="brand-three__rounded-text-shape-2"></div>
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                    class="brand-three__curved-circle-box video-popup">
                                    <div class="curved-circle-3">
                                        <span class="curved-circle--item">
                                            play video play video play video play video
                                        </span>
                                    </div><!-- /.curved-circle -->
                                    <div class="brand-three__icon">
                                        <span class="fas fa-play"></span>
                                    </div>
                                </a>
                                <div class="brand-three__img-box">
                                    <div class="brand-three__img-1">
                                        <img src="{{ asset('/assets/images/brand/brand-3-1.png') }}" alt="">
                                    </div>
                                    <div class="brand-three__img-1 brand-three__img-2">
                                        <img src="{{ asset('/assets/images/brand/brand-3-2.png') }}" alt="">
                                    </div>
                                    <div class="brand-three__img-1 brand-three__img-3">
                                        <img src="{{ asset('/assets/images/brand/brand-3-3.png') }}" alt="">
                                    </div>
                                    <div class="brand-three__img-1 brand-three__img-4">
                                        <img src="{{ asset('/assets/images/brand/brand-3-4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand Three End -->

        <!-- Portfolio Three Start -->
        <section class="portfolio-three">
            <div class="container">
                <div class="portfolio-three__top">
                    <h3 class="portfolio-three__title">WORK</h3>
                    <p class="portfolio-three__text">Worked with global brands & agency at the intersection<br> of flat
                        design and Creative technology.</p>
                </div>
            </div>
            <div class="portfolio-three__carousel swiper-container">
                <div class="swiper-wrapper">
                    <!--Portfolio Three Single Start-->
                    <div class="swiper-slide">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img src="{{ asset('/assets/images/project/portfolio-3-1.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-three__content">
                                    <h3 class="portfolio-three__single-title"><a href="{{ route('portfolioDetails') }}">Portfolio
                                            Center
                                            Slider</a></h3>
                                    <p class="portfolio-three__sub-title">Branding</p>
                                </div>
                                <div class="portfolio-three__arrow">
                                    <a href="{{ asset('/assets/images/project/portfolio-3-1.jpg') }}" class="img-popup"><span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Three Single End-->
                    <!--Portfolio Three Single Start-->
                    <div class="swiper-slide">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img src="{{ asset('/assets/images/project/portfolio-3-2.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-three__content">
                                    <h3 class="portfolio-three__single-title"><a href="{{ route('portfolioDetails') }}">Portfolio
                                            Center
                                            Slider</a></h3>
                                    <p class="portfolio-three__sub-title">Branding</p>
                                </div>
                                <div class="portfolio-three__arrow">
                                    <a href="{{ asset('/assets/images/project/portfolio-3-2.jpg') }}" class="img-popup"><span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Three Single End-->
                    <!--Portfolio Three Single Start-->
                    <div class="swiper-slide">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img src="{{ asset('/assets/images/project/portfolio-3-3.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-three__content">
                                    <h3 class="portfolio-three__single-title"><a href="{{ route('portfolioDetails') }}">Portfolio
                                            Center
                                            Slider</a></h3>
                                    <p class="portfolio-three__sub-title">Branding</p>
                                </div>
                                <div class="portfolio-three__arrow">
                                    <a href="{{ asset('/assets/images/project/portfolio-3-3.jpg') }}" class="img-popup"><span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Three Single End-->
                    <!--Portfolio Three Single Start-->
                    <div class="swiper-slide">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img src="{{ asset('/assets/images/project/portfolio-3-1.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-three__content">
                                    <h3 class="portfolio-three__single-title"><a href="{{ route('portfolioDetails') }}">Portfolio
                                            Center
                                            Slider</a></h3>
                                    <p class="portfolio-three__sub-title">Branding</p>
                                </div>
                                <div class="portfolio-three__arrow">
                                    <a href="{{ asset('/assets/images/project/portfolio-3-1.jpg') }}" class="img-popup"><span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Three Single End-->
                    <!--Portfolio Three Single Start-->
                    <div class="swiper-slide">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img src="{{ asset('/assets/images/project/portfolio-3-2.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-three__content">
                                    <h3 class="portfolio-three__single-title"><a href="{{ route('portfolioDetails') }}">Portfolio
                                            Center
                                            Slider</a></h3>
                                    <p class="portfolio-three__sub-title">Branding</p>
                                </div>
                                <div class="portfolio-three__arrow">
                                    <a href="{{ asset('/assets/images/project/portfolio-3-2.jpg') }}" class="img-popup"><span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Three Single End-->
                    <!--Portfolio Three Single Start-->
                    <div class="swiper-slide">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img src="{{ asset('/assets/images/project/portfolio-3-3.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-three__content">
                                    <h3 class="portfolio-three__single-title"><a href="{{ route('portfolioDetails') }}">Portfolio
                                            Center
                                            Slider</a></h3>
                                    <p class="portfolio-three__sub-title">Branding</p>
                                </div>
                                <div class="portfolio-three__arrow">
                                    <a href="{{ asset('/assets/images/project/portfolio-3-3.jpg') }}" class="img-popup"><span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Three Single End-->
                    <!--Portfolio Three Single Start-->
                    <div class="swiper-slide">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img src="{{ asset('/assets/images/project/portfolio-3-1.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-three__content">
                                    <h3 class="portfolio-three__single-title"><a href="{{ route('portfolioDetails') }}">Portfolio
                                            Center
                                            Slider</a></h3>
                                    <p class="portfolio-three__sub-title">Branding</p>
                                </div>
                                <div class="portfolio-three__arrow">
                                    <a href="{{ asset('/assets/images/project/portfolio-3-1.jpg') }}" class="img-popup"><span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Three Single End-->
                    <!--Portfolio Three Single Start-->
                    <div class="swiper-slide">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img src="{{ asset('/assets/images/project/portfolio-3-1.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-three__content">
                                    <h3 class="portfolio-three__single-title"><a href="{{ route('portfolioDetails') }}">Portfolio
                                            Center
                                            Slider</a></h3>
                                    <p class="portfolio-three__sub-title">Branding</p>
                                </div>
                                <div class="portfolio-three__arrow">
                                    <a href="{{ asset('/assets/images/project/portfolio-3-1.jpg') }}" class="img-popup"><span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Three Single End-->
                    <!--Portfolio Three Single Start-->
                    <div class="swiper-slide">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img src="{{ asset('/assets/images/project/portfolio-3-2.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-three__content">
                                    <h3 class="portfolio-three__single-title"><a href="{{ route('portfolioDetails') }}">Portfolio
                                            Center
                                            Slider</a></h3>
                                    <p class="portfolio-three__sub-title">Branding</p>
                                </div>
                                <div class="portfolio-three__arrow">
                                    <a href="{{ asset('/assets/images/project/portfolio-3-2.jpg') }}" class="img-popup"><span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Three Single End-->
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-nav-style-one">
                    <div class="swiper-dot-style1"></div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="portfolio-three__nav">
                    <div class="swiper-button-next1">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-prev1">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Three End -->

        <!-- Pricing One Start -->
        <section class="pricing-one">
            <div class="pricing-one__shape-1">
                <img src="{{ asset('/assets/images/shapes/pricing-one-shape-1.png') }}" alt="">
            </div>
            <div class="container">
                <div class="section-title-three text-center  sec-title-animation animation-style1">
                    <div class="section-title-three__tagline-box">
                        <span class="section-title-three__tagline">Pricing Plan</span>
                    </div>
                    <h2 class="section-title-three__title title-animation">Effective Branding at a <br> Price You Can
                        Afford</h2>
                </div>
                <div class="pricing-table-wrapper">
                    <table class="table pricing-table">
                        <thead>
                            <tr>
                                <th class="book-call">
                                    <div class="call-box">
                                        <img src="{{ asset('/assets/images/resources/pricing-one-call-box-img-1.jpg') }}"
                                            alt="Book a call">
                                        <div class="call-number">
                                            <a href="{{ 'tel:25825895931' }}">+258-2589-5931</a>
                                            <span>Book A Call</span>
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <p class="price-title">Starter</p>
                                    <p class="price-box">$499 <span>/Month</span></p>
                                    <a href="{{ route('pricing') }}" class="pricing-table__btn">Choose A Plan</a>
                                </th>
                                <th>
                                    <p class="price-title">Standard</p>
                                    <p class="price-box">$599 <span>/Month</span></p>
                                    <a href="{{ route('pricing') }}" class="pricing-table__btn">Choose A Plan</a>
                                </th>
                                <th class="highlight">
                                    <p class="price-title">Pro</p>
                                    <p class="price-box">$799 <span>/Month</span></p>
                                    <a href="{{ route('pricing') }}" class="pricing-table__btn highlight-btn">Choose A Plan</a>
                                </th>
                                <th>
                                    <p class="price-title">Ultimate</p>
                                    <p class="price-box">$999 <span>/Month</span></p>
                                    <a href="{{ route('pricing') }}" class="pricing-table__btn">Choose A Plan</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="title-box">
                                        <h5>Digital Strategy & Consulting</h5>
                                    </div>
                                </td>
                                <td>
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                                <td class="highlight">
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="title-box">
                                        <h5>Branding & Identity Design</h5>
                                    </div>
                                </td>
                                <td>
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                                <td class="highlight">
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="title-box">
                                        <h5>Web Development & Design</h5>
                                    </div>
                                </td>
                                <td class="dark-icon">
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                                <td class="highlight">
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="title-box">
                                        <h5>Social Media Management</h5>
                                    </div>
                                </td>
                                <td class="dark-icon">
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                                <td class="dark-icon">
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                                <td class="highlight">
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="pricing-one__icon">
                                        <span class="icon-cheack-2"></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- Pricing One End -->

        <!-- Why Choose Three Start -->
        <section class="why-choose-three">
            <div class="why-choose-three__bg-shape"
                style="background-image: url(assets/images/shapes/why-choose-three-bg-shape.jpg);"></div>
            <div class="why-choose-three__shape-1">
                <img src="{{ asset('/assets/images/shapes/why-choose-three-shape-1.png') }}" alt="">
            </div>
            <div class="container">
                <div class="why-choose-three__top">
                    <div class="section-title-three text-left  sec-title-animation animation-style2">
                        <div class="section-title-three__tagline-box">
                            <span class="section-title-three__tagline">What Makes Us Different</span>
                        </div>
                        <h2 class="section-title-three__title title-animation">Driven Digital Solutions That<br> Elevate
                            Your Brand</h2>
                    </div>
                    <p class="why-choose-three__text">Unlock the full potential of brand with digital solutions.<br> We
                        are dedicated to crafting strategies that drive<br> growth and deliver results.</p>
                </div>
                <div class="why-choose-three__bottom">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="why-choose-three__left">
                                <h3 class="why-choose-three__title-1">We Love What We Do</h3>
                                <p class="why-choose-three__text-1">Unlock the full potential brand with digital
                                    solutions. We are dedicated to crafting strategies </p>
                                <h3 class="why-choose-three__title-2">Why Work With Us</h3>
                                <p class="why-choose-three__text-2">Unlock the full potential brand with digital
                                    solutions. We are dedicated to crafting strategies that drive growth and deliver
                                    results.</p>
                                <div class="why-choose-three__btn-box">
                                    <a href="{{ route('contact') }}" class="thm-btn">Contact us<span
                                            class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="why-choose-three__middle">
                                <div class="why-choose-three__img">
                                    <img src="{{ asset('/assets/images/resources/why-choose-three-img-1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="why-choose-three__right">
                                <div class="why-choose-three__img-2">
                                    <img src="{{ asset('/assets/images/resources/why-choose-three-img-2.jpg') }}" alt="">
                                </div>
                                <div class="why-choose-three__progress-box-outer">
                                    <div class="why-choose-three__progress-single">
                                        <div class="why-choose-three__progress-box">
                                            <div class="circle-progress"
                                                data-options='{ "value": 0.85,"thickness": 1,"emptyFill": "#ffffff","lineCap": "square", "size": 60, "fill": { "color": "#ffffff" } }'>
                                            </div><!-- /.circle-progress -->
                                            <div class="why-choose-three__pack count-box">
                                                <p class="count-text" data-stop="85" data-speed="1500"></p>
                                                <span>%</span>
                                            </div>
                                        </div>
                                        <div class="why-choose-three__progress-content">
                                            <p>Management success</p>
                                        </div>
                                    </div>
                                    <div class="why-choose-three__progress-single">
                                        <div class="why-choose-three__progress-box">
                                            <div class="circle-progress"
                                                data-options='{ "value": 0.95,"thickness": 1,"emptyFill": "#ffffff","lineCap": "square", "size": 60, "fill": { "color": "#ffffff" } }'>
                                            </div><!-- /.circle-progress -->
                                            <div class="why-choose-three__pack count-box">
                                                <p class="count-text" data-stop="95" data-speed="1500"></p>
                                                <span>%</span>
                                            </div>
                                        </div>
                                        <div class="why-choose-three__progress-content">
                                            <p>SEO Optimization</p>
                                        </div>
                                    </div>
                                    <div class="why-choose-three__progress-single">
                                        <div class="why-choose-three__progress-box">
                                            <div class="circle-progress"
                                                data-options='{ "value": 0.80,"thickness": 1,"emptyFill": "#ffffff","lineCap": "square", "size": 60, "fill": { "color": "#ffffff" } }'>
                                            </div><!-- /.circle-progress -->
                                            <div class="why-choose-three__pack count-box">
                                                <p class="count-text" data-stop="80" data-speed="1500"></p>
                                                <span>%</span>
                                            </div>
                                        </div>
                                        <div class="why-choose-three__progress-content">
                                            <p>Marketing Automation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Three End -->

        <!-- Team Two Start -->
        <section class="team-two">
            <div class="container">
                <div class="section-title-three text-center  sec-title-animation animation-style1">
                    <div class="section-title-three__tagline-box">
                        <span class="section-title-three__tagline">OUR TEAM</span>
                    </div>
                    <h2 class="section-title-three__title title-animation">Meet The Team</h2>
                </div>
                <div class="row">
                    <!--Team Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="team-two__single">
                            <div class="team-two__img-box">
                                <div class="team-two__img">
                                    <img src="{{ asset('/assets/images/team/team-2-1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__title"><a href="{{ route('teamDetails') }}">Cody Fisher</a></h3>
                                <p class="team-two__sub-title">Web Developer</p>
                                <div class="team-two__social">
                                    <a href="{{ '#' }}"><span class="icon-facebook"></span></a>
                                    <a href="{{ '#' }}"><span class="icon-twitter"></span></a>
                                    <a href="{{ '#' }}"><span class="icon-instagram"></span></a>
                                    <a href="{{ '#' }}"><span class="icon-linkin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-two__single">
                            <div class="team-two__img-box">
                                <div class="team-two__img">
                                    <img src="{{ asset('/assets/images/team/team-2-2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__title"><a href="{{ route('teamDetails') }}">Eleanor Pena</a></h3>
                                <p class="team-two__sub-title">UI/UX Designer</p>
                                <div class="team-two__social">
                                    <a href="{{ '#' }}"><span class="icon-facebook"></span></a>
                                    <a href="{{ '#' }}"><span class="icon-twitter"></span></a>
                                    <a href="{{ '#' }}"><span class="icon-instagram"></span></a>
                                    <a href="{{ '#' }}"><span class="icon-linkin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                        <div class="team-two__single">
                            <div class="team-two__img-box">
                                <div class="team-two__img">
                                    <img src="{{ asset('/assets/images/team/team-2-3.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="team-two__content">
                                <h3 class="team-two__title"><a href="{{ route('teamDetails') }}">Devon Lane</a></h3>
                                <p class="team-two__sub-title">Product Designer </p>
                                <div class="team-two__social">
                                    <a href="{{ '#' }}"><span class="icon-facebook"></span></a>
                                    <a href="{{ '#' }}"><span class="icon-twitter"></span></a>
                                    <a href="{{ '#' }}"><span class="icon-instagram"></span></a>
                                    <a href="{{ '#' }}"><span class="icon-linkin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                </div>
            </div>
        </section>
        <!-- Team Two End -->

        <!-- Testimonial Three Start-->
        <section class="testimonial-three">
            <div class="testimonial-three__bg"
                style="background-image: url(assets/images/backgrounds/testimonial-three-bg.jpg);"></div>
            <div class="testimonial-three__shape-1 float-bob-x">
                <img src="{{ asset('/assets/images/shapes/testimonial-three-shape-1.png') }}" alt="">
            </div>
            <div class="testimonial-three__shape-2 float-bob-y">
                <img src="{{ asset('/assets/images/shapes/testimonial-three-shape-2.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-2">
                        <div class="testimonial-three__left">
                            <p class="testimonial-three__client-title">Testimonial</p>
                            <div class="testimonial-three__client-box">
                                <ul class="testimonial-three__client-img-list list-unstyled">
                                    <li>
                                        <div class="testimonial-three__client-img">
                                            <img src="{{ asset('/assets/images/testimonial/testimonial-three-client-img-1.jpg') }}"
                                                alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-three__client-img">
                                            <img src="{{ asset('/assets/images/testimonial/testimonial-three-client-img-2.jpg') }}"
                                                alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-three__client-img">
                                            <img src="{{ asset('/assets/images/testimonial/testimonial-three-client-img-3.jpg') }}"
                                                alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-three__client-plus">
                                            <a href="{{ '#' }}"><span class="fas fa-plus"></span></a>
                                        </div>
                                    </li>
                                </ul>
                                <p class="testimonial-three__client-text">More then <span
                                        class="odometer testimonial-three__client-text-1"
                                        data-count="35">00</span><span>k</span><span
                                        class="testimonial-three__client-text-plus">+</span> customers Reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10">
                        <div class="testimonial-three__right">
                            <h3 class="testimonial-three__right-title">What our client say<br> about us</h3>
                            <div class="testimonial-three__inner">
                                <div class="testimonial-three__carousel swiper-container">
                                    <div class="swiper-wrapper">
                                        <!--Testimonial Three Single Start-->
                                        <div class="swiper-slide">
                                            <div class="testimonial-three__single">
                                                <div class="testimonial-three__tmg-box">
                                                    <div class="testimonial-three__img">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-3-1.jpg') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-three__content">
                                                    <p class="testimonial-three__text">"We were struggling to rank for
                                                        relevant keywords before partnering with Our Agency . Their team
                                                        developed a comprehensive SEO strategy that the helped us climb
                                                        the search engine rankings and attract our most target audience.
                                                        We're highly more impressed with their results </p>
                                                    <div class="testimonial-three__client-and-quote">
                                                        <div class="testimonial-three__client-info">
                                                            <h3><a href="{{ route('testimonials') }}">Jackson Hobber</a></h3>
                                                            <p class="testimonial-three__sub-title">CEO,AB Tech</p>
                                                        </div>
                                                        <div class="testimonial-three__quote">
                                                            <span class="icon-quote"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Testimonial Three Single End-->
                                        <!--Testimonial Three Single Start-->
                                        <div class="swiper-slide">
                                            <div class="testimonial-three__single">
                                                <div class="testimonial-three__tmg-box">
                                                    <div class="testimonial-three__img">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-3-2.jpg') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-three__content">
                                                    <p class="testimonial-three__text">"We were struggling to rank for
                                                        relevant keywords before partnering with Our Agency . Their team
                                                        developed a comprehensive SEO strategy that the helped us climb
                                                        the search engine rankings and attract our most target audience.
                                                        We're highly more impressed with their results </p>
                                                    <div class="testimonial-three__client-and-quote">
                                                        <div class="testimonial-three__client-info">
                                                            <h3><a href="{{ route('testimonials') }}">Alisha Martin</a></h3>
                                                            <p class="testimonial-three__sub-title">CEO,AB Tech</p>
                                                        </div>
                                                        <div class="testimonial-three__quote">
                                                            <span class="icon-quote"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Testimonial Three Single End-->
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="testimonial-three__nav">
                                        <div class="swiper-button-next1">
                                            <i class="icon-left-arrow"></i>
                                        </div>
                                        <div class="swiper-button-prev1">
                                            <i class="icon-right-arrow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Three End -->

        <!-- Blog Three Start -->
        <section class="blog-three">
            <div class="container">
                <div class="blog-three__top">
                    <div class="section-title-three text-left  sec-title-animation animation-style2">
                        <div class="section-title-three__tagline-box">
                            <span class="section-title-three__tagline">NEWS & EVENTS</span>
                        </div>
                        <h2 class="section-title-three__title title-animation">Latest Blog Posts</h2>
                    </div>
                    <div class="blog-three__btn-box">
                        <a href="{{ route('blog') }}" class="thm-btn">See All Blog<span class="icon-arrow-up-right"></span></a>
                    </div>
                </div>
                <div class="row">
                    <!--Blog Three Single Start-->
                    <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="blog-three__single">
                            <div class="blog-three__img-box">
                                <div class="blog-three__img">
                                    <img src="{{ asset('/assets/images/blog/blog-3-1.jpg') }}" alt="">
                                </div>
                                <div class="blog-three__date">
                                    <p>20<span>May</span></p>
                                </div>
                            </div>
                            <div class="blog-three__content">
                                <div class="blog-three__tag-and-comment">
                                    <p class="blog-three__tag">Branding</p>
                                    <div class="blog-three__tag-shape"></div>
                                    <div class="blog-three__comment">
                                        <p><span class="icon-comments"></span>05 Comment</p>
                                    </div>
                                </div>
                                <h3 class="blog-three__title"><a href="{{ route('blogDetails') }}">The Intersection Of Design and
                                        Digital Agency</a></h3>
                                <p class="blog-three__text">Words matter, and our copy writing services ensure your
                                    message heard </p>
                                <div class="blog-three__read-more">
                                    <a href="{{ route('blogDetails') }}">Read More<span class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Three Single End-->
                    <!--Blog Three Single Start-->
                    <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="blog-three__single">
                            <div class="blog-three__img-box">
                                <div class="blog-three__img">
                                    <img src="{{ asset('/assets/images/blog/blog-3-2.jpg') }}" alt="">
                                </div>
                                <div class="blog-three__date">
                                    <p>20<span>May</span></p>
                                </div>
                            </div>
                            <div class="blog-three__content">
                                <div class="blog-three__tag-and-comment">
                                    <p class="blog-three__tag">Branding</p>
                                    <div class="blog-three__tag-shape"></div>
                                    <div class="blog-three__comment">
                                        <p><span class="icon-comments"></span>05 Comment</p>
                                    </div>
                                </div>
                                <h3 class="blog-three__title"><a href="{{ route('blogDetails') }}">The Role of Influencer
                                        Marketing in Building</a></h3>
                                <p class="blog-three__text">Words matter, and our copy writing services ensure your
                                    message heard </p>
                                <div class="blog-three__read-more">
                                    <a href="{{ route('blogDetails') }}">Read More<span class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog Three Single End-->
                </div>
            </div>
        </section>
        <!-- Blog Three End -->

        


        


        
       

        

    <!-- footer area -->
    @include('frontend.includes.footers.footerThree')
    <!-- footer area end -->
@endsection

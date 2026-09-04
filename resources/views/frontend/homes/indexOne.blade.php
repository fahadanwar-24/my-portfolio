@extends('frontend.layouts.app')
@section('title', 'Index One')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        
        <!-- Banner One Start -->
        <section class="banner-one">
            <div class="banner-one__one-shape-bg"
                style="background-image: url(assets/images/shapes/banner-one-shape-bg.png);"></div>
            <div class="banner-one__shape-one"
                style="background-image: url(assets/images/shapes/banner-one-shape-1.png);"></div>
            <div class="banner-one__shape-two"></div>
            <div class="container">
                <div class="banner-one__inner">
                    <div class="banner-one__sub-title-box">
                        <p>Great design services <br> without the pretentiousness.!</p>
                    </div>
                    <div class="banner-one__content-one" data-aos="fade-right" data-aos-duration="1000"
                        data-aos-delay="0">
                        <h2 class="banner-one__big-title-one">Digital</h2>
                    </div>
                    <div class="banner-one__content-two" data-aos="fade-left" data-aos-duration="1000"
                        data-aos-delay="500">
                        <ul class="banner-one__content-two-list">
                            <li>
                                <div class="banner-one__content-two-single">
                                    <h3>WEB <br> DESIGN</h3>
                                </div>
                            </li>
                            <li>
                                <div class="banner-one__content-two-single-two">
                                    <img src="{{ asset('/assets/images/icon/banner-one-icon-man.png') }}" alt="">
                                </div>
                            </li>
                        </ul>
                        <h2 class="banner-one__big-title-two">Solution</h2>
                    </div>
                    <div class="banner-one__details-box">
                        <div class="banner-one__text-box-one">
                            <p>We believe that the surest measure of success is when our partners with us more than half
                                It's more than just the visuals. We're here to support your growth.</p>
                            <a href="{{ '#' }}">View all Services<span class="icon-arrow-up-right"></span></a>
                        </div>
                        <div class="banner-one__review-box">
                            <ul class="banner-one__review-list">
                                <li>
                                    <div class="banner-one__review-img">
                                        <img src="{{ asset('/assets/images/resources/banner-one-review-img-1-1.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-one__review-img">
                                        <img src="{{ asset('/assets/images/resources/banner-one-review-img-1-2.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-one__review-img">
                                        <img src="{{ asset('/assets/images/resources/banner-one-review-img-1-3.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-one__review-count-box">
                                        <h3 class="odometer" data-count="15">00</h3>
                                        <span>K+</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="banner-one__review-text-box">
                                <div class="banner-one__review-text">
                                    <p>Excellent</p>
                                    <div class="banner-one__review-text-count-box">
                                        <h3 class="odometer" data-count="4000">00</h3>
                                        <span>+</span>
                                    </div>
                                    <p>Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Banner One End -->

        <!--Explore One Start -->
        <section class="explore-one">
            <div class="explore-one__bg" style="background-image: url(assets/images/backgrounds/explore-one-bg.jpg);">
                <div class="explore-one__rounded-text">
                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                        class="explore-one__curved-circle-box video-popup">
                        <div class="curved-circle">
                            <span class="curved-circle--item">
                                . Explore More . Explore More
                            </span>
                        </div><!-- /.curved-circle -->
                        <div class="explore-one__icon">
                            <span class="icon-arrow-up-right"></span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!--Explore One End -->

        <!--About One Start -->
        <section class="about-one">
            <div class="about-one__shape-1">
                <img src="{{ asset('/assets/images/shapes/about-one-shape-1.png') }}" alt="">
            </div>
            <div class="container">
                <h2 class="about-one__title">We collaborate with a few disability service <br>providers to
                    create inclusive goods that<br> meet their requirements.</h2>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="about-one__experience-box">
                            <div class="about-one__experience-count">
                                <h3 class="odometer" data-count="25">00</h3>
                                <span>+</span>
                            </div>
                            <p class="about-one__experience-count-text">Years Of Experience</p>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="about-one__single-list">
                            <div class="row">
                                <!--About One Single Start-->
                                <div class="col-xl-6 col-lg-6">
                                    <div class="about-one__single">
                                        <P class="about-one__text">Established in 1995, NEXIN has been a leading
                                            force<br>
                                            in
                                            the digital landscape for over two decades.<br> We're a passionate team of
                                            designers, </P>
                                        <div class="about-one__btn">
                                            <a href="{{ route('about') }}">More About Us<span
                                                    class="icon-arrow-up-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--About One Single End-->
                                <!--About One Single Start-->
                                <div class="col-xl-6 col-lg-6">
                                    <div class="about-one__single about-one__single-2">
                                        <P class="about-one__text">Established in 1995, NEXIN has been a leading
                                            force<br>
                                            in
                                            the digital landscape for over two decades.<br> We're a passionate team of
                                            designers, </P>
                                        <div class="about-one__btn">
                                            <a href="{{ route('about') }}">More About Us<span
                                                    class="icon-arrow-up-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--About One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-one__bottom">
                    <div class="about-one__title-box">
                        <h3 class="about-one__bottom-title">We worked with global largest brands</h3>
                    </div>
                    <div class="brand-one">
                        <div class="brand-one__inner">
                            <div class="swiper-container brand-one__carousel">
                                <div class="swiper-wrapper">
                                    <!--Start Brand One Single-->
                                    <div class="swiper-slide">
                                        <div class="brand-one__single">
                                            <div class="brand-one__single-inner">
                                                <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-1-1.png') }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Brand One Single-->

                                    <!--Start Brand One Single-->
                                    <div class="swiper-slide">
                                        <div class="brand-one__single">
                                            <div class="brand-one__single-inner">
                                                <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-1-2.png') }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Brand One Single-->

                                    <!--Start Brand One Single-->
                                    <div class="swiper-slide">
                                        <div class="brand-one__single">
                                            <div class="brand-one__single-inner">
                                                <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-1-3.png') }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Brand One Single-->

                                    <!--Start Brand One Single-->
                                    <div class="swiper-slide">
                                        <div class="brand-one__single">
                                            <div class="brand-one__single-inner">
                                                <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-1-4.png') }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Brand One Single-->

                                    <!--Start Brand One Single-->
                                    <div class="swiper-slide">
                                        <div class="brand-one__single">
                                            <div class="brand-one__single-inner">
                                                <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-1-5.png') }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Brand One Single-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End -->

        <!--Service One Start -->
        <section class="service-one">
            <div class="service-one__shape-1 rotate-me">
                <img src="{{ asset('/assets/images/shapes/services-one-shape-1.png') }}" alt="">
            </div>
            <div class="service-one__shape-2 float-bob-y">
                <img src="{{ asset('/assets/images/shapes/services-one-shape-2.png') }}" alt="">
            </div>
            <div class="container">
                <div class="service-one__top">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-shape"></div>
                            <span class="section-title__tagline">SERVICES</span>
                        </div>
                        <h2 class="section-title__title title-animation">Empowering Brands Through <br>Strategic Digital
                            Services
                        </h2>
                    </div>
                    <p class="service-one__top-text">Established in 1995, NEXIN has been a leading force<br> in the
                        digital landscape for over two decades. We're<br> a passionate team of designers, </p>
                </div>
                <div class="service-one__bottom">
                    <div class="row">
                        <!--Services One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="service-one__single">
                                <div class="service-one__single-inner-shape-1"></div>
                                <div class="service-one__arrow">
                                    <a href="{{ route('serviceDetails') }}"><span class="icon-arrow-down"></span></a>
                                </div>
                                <div class="service-one__single-inner">
                                    <div class="service-one__sub-title-box">
                                        <div class="service-one__sub-title-shape-1"></div>
                                        <span class="service-one__sub-title">Visual Branding</span>
                                    </div>
                                    <h3 class="service-one__title"><a href="{{ route('serviceDetails') }}">Web Design and
                                            Development</a></h3>
                                    <div class="service-one__icon">
                                        <span class="icon-agency"></span>
                                    </div>
                                    <p class="service-one__text">Established in 1995, NEXIN has been leading force in
                                        the
                                        digital landscape for over two decades. We're a passionate </p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single Start-->
                        <!--Services One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="service-one__single">
                                <div class="service-one__single-inner-shape-1"></div>
                                <div class="service-one__arrow">
                                    <a href="{{ route('serviceDetails') }}"><span class="icon-arrow-down"></span></a>
                                </div>
                                <div class="service-one__single-inner">
                                    <div class="service-one__sub-title-box">
                                        <div class="service-one__sub-title-shape-1"></div>
                                        <span class="service-one__sub-title">Brand Strategy</span>
                                    </div>
                                    <h3 class="service-one__title"><a href="{{ route('serviceDetails') }}">Branding and Creative
                                            Services</a></h3>
                                    <div class="service-one__icon">
                                        <span class="icon-branding"></span>
                                    </div>
                                    <p class="service-one__text">Established in 1995, NEXIN has been leading force in
                                        the
                                        digital landscape for over two decades. We're a passionate </p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single Start-->
                        <!--Services One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                            <div class="service-one__single">
                                <div class="service-one__single-inner-shape-1"></div>
                                <div class="service-one__arrow">
                                    <a href="{{ route('serviceDetails') }}"><span class="icon-arrow-down"></span></a>
                                </div>
                                <div class="service-one__single-inner">
                                    <div class="service-one__sub-title-box">
                                        <div class="service-one__sub-title-shape-1"></div>
                                        <span class="service-one__sub-title">Identity Build</span>
                                    </div>
                                    <h3 class="service-one__title"><a href="{{ route('serviceDetails') }}">Creative Digital
                                            <br> Agency</a></h3>
                                    <div class="service-one__icon">
                                        <span class="icon-creative"></span>
                                    </div>
                                    <p class="service-one__text">Established in 1995, NEXIN has been leading force in
                                        the
                                        digital landscape for over two decades. We're a passionate </p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single Start-->
                    </div>
                </div>
            </div>
        </section>
        <!--Service One End -->

        <!--Counter One Start -->
        <section class="counter-one">
            <div class="container">
                <ul class="counter-one__single-list-box list-unstyled">
                    <!--Counter One Single Start-->
                    <li class="counter-one__single-list wow fadeInLeft" data-wow-delay="100ms">
                        <div class="counter-one__single">
                            <div class="counter-one__count count-box">
                                <h3 class="count-text" data-stop="35" data-speed="1500">00</h3>
                                <span>k</span>
                                <span>+</span>
                            </div>
                            <p class="counter-one__count-text">Project<br> Complete</p>
                        </div>
                    </li>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <li class="counter-one__single-list wow fadeInLeft" data-wow-delay="200ms">
                        <div class="counter-one__single">
                            <div class="counter-one__count count-box">
                                <h3 class="count-text" data-stop="10" data-speed="1500">00</h3>
                                <span>k</span>
                                <span>+</span>
                            </div>
                            <p class="counter-one__count-text">Happy <br>customers</p>
                        </div>
                    </li>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <li class="counter-one__single-list wow fadeInRight" data-wow-delay="300ms">
                        <div class="counter-one__single">
                            <div class="counter-one__count count-box">
                                <h3 class="count-text" data-stop="25" data-speed="1500">00</h3>
                                <span>+</span>
                            </div>
                            <p class="counter-one__count-text">Years <br>experiences</p>
                        </div>
                    </li>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <li class="counter-one__single-list wow fadeInRight" data-wow-delay="400ms">
                        <div class="counter-one__single">
                            <div class="counter-one__count count-box">
                                <h3 class="count-text" data-stop="88" data-speed="1500">00</h3>
                            </div>
                            <p class="counter-one__count-text">Awards <br>achievement</p>
                        </div>
                    </li>
                    <!--Counter One Single End-->
                </ul>
            </div>
        </section>
        <!--Counter One End -->

        <!--Video One Start -->
        <section class="video-one">
            <div class="video-one__bg" style="background-image: url(assets/images/backgrounds/video-one-bg.jpg);"></div>
            <div class="container">
                <div class="video-one__inner">
                    <div class="video-one__video-link">
                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                            <div class="video-one__video-text">
                                <span>Play video</span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--Video One End -->

        <!--Portfolio One Start -->
        <section class="portfolio-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="portfolio-one__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <span class="section-title__tagline">PORTFOLIO</span>
                                </div>
                                <h2 class="section-title__title title-animation">Exhibiting Outstanding Creativity
                                </h2>
                            </div>
                            <p class="portfolio-one__text">Established in 1995, NEXIN has been leading force in the
                                digital landscape<br> for over two decades. We're a passionate </p>
                            <ul class="portfolio-one__list list-unstyled">
                                <li>
                                    <div class="portfolio-one__list-title">
                                        <div class="portfolio-one__list-shape-1"></div>
                                        <h4><a href="{{ route('portfolioDetails') }}">Innovative Branding</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-one__list-title">
                                        <div class="portfolio-one__list-shape-1"></div>
                                        <h4><a href="{{ route('portfolioDetails') }}">Engaging E-commerce Platform</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-one__list-title">
                                        <div class="portfolio-one__list-shape-1"></div>
                                        <h4><a href="{{ route('portfolioDetails') }}">SEO and Content Marketing</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-one__list-title">
                                        <div class="portfolio-one__list-shape-1"></div>
                                        <h4><a href="{{ route('portfolioDetails') }}">Creative Website Redesign</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-one__list-title">
                                        <div class="portfolio-one__list-shape-1"></div>
                                        <h4><a href="{{ route('portfolioDetails') }}">Effective Email Marketing</a></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="portfolio-one__right">
                            <div class="portfolio-one__view">
                                <a href="{{ route('portfolio') }}">View All<span class="icon-arrow-up-right"></span></a>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="portfolio-one__img-box">
                                        <div class="portfolio-one__img">
                                            <img src="{{ asset('/assets/images/project/portfolio-one-img-1.jpg') }}" alt="">
                                        </div>
                                        <div class="portfolio-one__arrow">
                                            <a href="{{ '#' }}"><span class="icon-arrow-up-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="portfolio-one__img-box-2">
                                        <div class="portfolio-one__img-2">
                                            <img src="{{ asset('/assets/images/project/portfolio-one-img-2.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio One End -->

        <!--Process One Start -->
        <section class="process-one">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape"></div>
                        <span class="section-title__tagline">Workflow</span>
                    </div>
                    <h2 class="section-title__title title-animation">How We Work</h2>
                </div>
                <div class="row">
                    <!--Process One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="process-one__single">
                            <div class="process-one__icon-and-count">
                                <div class="process-one__icon">
                                    <img src="{{ asset('/assets/images/icon/process-one-icon-1.png') }}" alt="">
                                </div>
                                <div class="process-one__count"></div>
                                <div class="process-one__single-shape-1">
                                    <img src="{{ asset('/assets/images/shapes/process-one-single-shape-1.png') }}" alt="">
                                </div>
                            </div>
                            <h3 class="process-one__title">Research and Strategy</h3>
                            <p class="process-one__text">Conduct thorough market of the research<br> to the fast target
                                audience behaviors.<br> Submit as many design tasks</p>
                        </div>
                    </div>
                    <!--Process One Single End-->
                    <!--Process One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="process-one__single">
                            <div class="process-one__icon-and-count">
                                <div class="process-one__icon">
                                    <img src="{{ asset('/assets/images/icon/process-one-icon-2.png') }}" alt="">
                                </div>
                                <div class="process-one__count"></div>
                                <div class="process-one__single-shape-1">
                                    <img src="{{ asset('/assets/images/shapes/process-one-single-shape-1.png') }}" alt="">
                                </div>
                            </div>
                            <h3 class="process-one__title">Plan Customization</h3>
                            <p class="process-one__text">Conduct thorough market of the research<br> to the fast target
                                audience behaviors.<br> Submit as many design tasks</p>
                        </div>
                    </div>
                    <!--Process One Single End-->
                    <!--Process One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="process-one__single">
                            <div class="process-one__icon-and-count">
                                <div class="process-one__icon">
                                    <img src="{{ asset('/assets/images/icon/process-one-icon-3.png') }}" alt="">
                                </div>
                                <div class="process-one__count"></div>
                                <div class="process-one__single-shape-1">
                                    <img src="{{ asset('/assets/images/shapes/process-one-single-shape-1.png') }}" alt="">
                                </div>
                            </div>
                            <h3 class="process-one__title">Finished & User Testing</h3>
                            <p class="process-one__text">Conduct thorough market of the research<br> to the fast target
                                audience behaviors.<br> Submit as many design tasks</p>
                        </div>
                    </div>
                    <!--Process One Single End-->
                </div>
            </div>
        </section>
        <!--Process One End -->

        <!--Why Choose One Start -->
        <section class="why-choose-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-one__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <span class="section-title__tagline">What Sets Us Apart</span>
                                </div>
                                <h2 class="section-title__title title-animation">Driving Digital Success With Strategy
                                    Design</h2>
                            </div>
                            <div class="why-choose-one__text-1">We believe that the surest measure of success is when
                                our partners with us more than half It's more than just the visuals. </div>
                            <div class="why-choose-one__img-1">
                                <img src="{{ asset('/assets/images/resources/why-choose-one-img-1.jpg') }}" alt="">
                                <div class="why-choose-one__img-shape-1"></div>
                                <div class="why-choose-one__img-shape-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="why-choose-one__middle">
                            <div class="why-choose-one__img-2">
                                <img src="{{ asset('/assets/images/resources/why-choose-one-img-2.jpg') }}" alt="">
                            </div>
                            <p class="why-choose-one__text-2">Conduct thorough market research to the fast target
                                audience behaviours. Submit as many design tasks</p>
                            <div class="why-choose-one__contact-us">
                                <a href="{{ route('contact') }}">Contact us<span class="icon-arrow-up-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="why-choose-one__right">
                            <p class="why-choose-one__text-3">We believe that the surest measure of success is when our
                                partners with us more than half It's more than just the visuals. We're here to support
                                your growth.</p>
                            <p class="why-choose-one__text-4">We believe that the surest measure of success is when our
                                partners with us more than half It's more than just the visuals. </p>
                            <h3 class="why-choose-one__right-title-1">Our Mission</h3>
                            <p class="why-choose-one__text-5">Conduct thorough market research to the fast target
                                audience behaviours.</p>
                            <div class="why-choose-one__right-bottom">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="why-choose-one__mission-single">
                                            <div class="why-choose-one__mission-img">
                                                <img src="{{ asset('/assets/images/resources/why-choose-one-mission-img-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="why-choose-one__mission-content">
                                                <h4>Marketing<br> Strategy</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="why-choose-one__mission-single">
                                            <div class="why-choose-one__mission-img">
                                                <img src="{{ asset('/assets/images/resources/why-choose-one-mission-img-2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="why-choose-one__mission-content">
                                                <h4>UX/UI<br> Solution</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End -->

        <!--Team One Start -->
        <section class="team-one">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape"></div>
                        <span class="section-title__tagline">TEAM</span>
                    </div>
                    <h2 class="section-title__title title-animation">Introducing Our Skilled Team!</h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('/assets/images/team/team-1-1.jpg') }}" alt="">
                                </div>
                                <div class="team-one__social-box">
                                    <ul class="team-one__social list-unstyled">
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-facebook"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-twitter"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-instagram"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-linkin"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="{{ route('teamDetails') }}">Cameron Williamson</a></h3>
                                <p class="team-one__sub-title">Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('/assets/images/team/team-1-2.jpg') }}" alt="">
                                </div>
                                <div class="team-one__social-box">
                                    <ul class="team-one__social list-unstyled">
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-facebook"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-twitter"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-instagram"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-linkin"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="{{ route('teamDetails') }}">Leslie Alexander</a></h3>
                                <p class="team-one__sub-title">Designer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('/assets/images/team/team-1-3.jpg') }}" alt="">
                                </div>
                                <div class="team-one__social-box">
                                    <ul class="team-one__social list-unstyled">
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-facebook"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-twitter"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-instagram"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-linkin"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="{{ route('teamDetails') }}">Guy Hawkins</a></h3>
                                <p class="team-one__sub-title">Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('/assets/images/team/team-1-4.jpg') }}" alt="">
                                </div>
                                <div class="team-one__social-box">
                                    <ul class="team-one__social list-unstyled">
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-facebook"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-twitter"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-instagram"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ '#' }}"><span class="icon-linkin"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="{{ route('teamDetails') }}">Jenny Wilson</a></h3>
                                <p class="team-one__sub-title">Brand Designer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team One End -->

        <!--Testimonial One Start -->
        <section class="testimonial-one">
            <div class="testimonial-one__shape-1 float-bob-y">
                <img src="{{ asset('/assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <span class="section-title__tagline">OUR TESTIMONIALS</span>
                                </div>
                                <h2 class="section-title__title title-animation">Hear Real Stories from Happy Clients
                                </h2>
                            </div>
                            <div class="testimonial-one__carousel swiper-container">
                                <div class="swiper-wrapper">
                                    <!--Testimonial One Single Start-->
                                    <div class="swiper-slide">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__name-and-quote">
                                                <div class="testimonial-one__name-box">
                                                    <h3 class="testimonial-one__name"><a href="{{ route('testimonials') }}">Ralph
                                                            Edwards</a>
                                                    </h3>
                                                    <p class="testimonial-one__sub-title">CEO,AB Tech</p>
                                                </div>
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-quote"></span>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">"We were struggling to rank for relevant
                                                keywords before partnering with Our Agency . Their team developed a
                                                comprehensive SEO strategy that the helped us climb the search engine
                                                rankings and attract our most target audience. We're highly more
                                                impressed with their results” </p>
                                            <div class="testimonial-one__author-and-ratting">
                                                <div class="testimonial-one__author">
                                                    <div class="icon">
                                                        <span class="fas fa-star"></span>
                                                    </div>
                                                    <div class="content">
                                                        <span>Verified By</span>
                                                        <h3>TRUSTPIOLT</h3>
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__ratting">
                                                    <span class="fas fa-star"></span>
                                                    <span class="fas fa-star"></span>
                                                    <span class="fas fa-star"></span>
                                                    <span class="fas fa-star"></span>
                                                    <span class="fas fa-star-half"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Testimonial One Single End-->
                                    <!--Testimonial One Single Start-->
                                    <div class="swiper-slide">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__name-and-quote">
                                                <div class="testimonial-one__name-box">
                                                    <h3 class="testimonial-one__name"><a href="{{ route('testimonials') }}">Alisha
                                                            Martin</a>
                                                    </h3>
                                                    <p class="testimonial-one__sub-title">CEO,AB Tech</p>
                                                </div>
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-quote"></span>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">"We were struggling to rank for relevant
                                                keywords before partnering with Our Agency . Their team developed a
                                                comprehensive SEO strategy that the helped us climb the search engine
                                                rankings and attract our most target audience. We're highly more
                                                impressed with their results” </p>
                                            <div class="testimonial-one__author-and-ratting">
                                                <div class="testimonial-one__author">
                                                    <div class="icon">
                                                        <span class="fas fa-star"></span>
                                                    </div>
                                                    <div class="content">
                                                        <span>Verified By</span>
                                                        <h3>TRUSTPIOLT</h3>
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__ratting">
                                                    <span class="fas fa-star"></span>
                                                    <span class="fas fa-star"></span>
                                                    <span class="fas fa-star"></span>
                                                    <span class="fas fa-star"></span>
                                                    <span class="fas fa-star-half"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Testimonial One Single End-->
                                    <!--Testimonial One Single Start-->
                                    <div class="swiper-slide">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__name-and-quote">
                                                <div class="testimonial-one__name-box">
                                                    <h3 class="testimonial-one__name"><a href="{{ route('testimonials') }}">David
                                                            Koper</a>
                                                    </h3>
                                                    <p class="testimonial-one__sub-title">CEO,AB Tech</p>
                                                </div>
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-quote"></span>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">"We were struggling to rank for relevant
                                                keywords before partnering with Our Agency . Their team developed a
                                                comprehensive SEO strategy that the helped us climb the search engine
                                                rankings and attract our most target audience. We're highly more
                                                impressed with their results” </p>
                                            <div class="testimonial-one__author-and-ratting">
                                                <div class="testimonial-one__author">
                                                    <div class="icon">
                                                        <span class="fas fa-star"></span>
                                                    </div>
                                                    <div class="content">
                                                        <span>Verified By</span>
                                                        <h3>TRUSTPIOLT</h3>
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__ratting">
                                                    <span class="fas fa-star"></span>
                                                    <span class="fas fa-star"></span>
                                                    <span class="fas fa-star"></span>
                                                    <span class="fas fa-star"></span>
                                                    <span class="fas fa-star-half"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-nav-style-one">
                                    <div class="swiper-dot-style1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="testimonial-one__right">
                            <div class="testimonial-one__img">
                                <img src="{{ asset('/assets/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End -->

        <!--Faq One Start -->
        <section class="faq-one">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape"></div>
                        <span class="section-title__tagline">FAQ</span>
                    </div>
                    <h2 class="section-title__title title-animation">Frequency & Questions
                    </h2>
                </div>
                <div class="faq-one__inner">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <div class="accrodion active wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>What services does your digital agency offer?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Meeting project deadlines is a top priority. We understand the importance of
                                        timely delivery and have established a comprehensive approach to ensure that all
                                        projects are completed on schedule without compromising quality.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>How long does it take to complete a project?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Meeting project deadlines is a top priority. We understand the importance of
                                        timely delivery and have established a comprehensive approach to ensure that all
                                        projects are completed on schedule without compromising quality.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>Do you offer ongoing support and maintenance?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Meeting project deadlines is a top priority. We understand the importance of
                                        timely delivery and have established a comprehensive approach to ensure that all
                                        projects are completed on schedule without compromising quality.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>Will my website be mobile-friendly and SEO optimized?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Meeting project deadlines is a top priority. We understand the importance of
                                        timely delivery and have established a comprehensive approach to ensure that all
                                        projects are completed on schedule without compromising quality.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>What is your pricing model?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Meeting project deadlines is a top priority. We understand the importance of
                                        timely delivery and have established a comprehensive approach to ensure that all
                                        projects are completed on schedule without compromising quality.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Faq One End -->

        <!--Contact One Start -->
        <section class="contact-one">
            <div class="contact-one__bg" style="background-image: url(assets/images/backgrounds/contact-one-bg.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4"></div>
                    <div class="col-xl-8">
                        <div class="contact-one__right">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <span class="section-title__tagline">CONTACT US</span>
                                </div>
                                <h2 class="section-title__title title-animation">We’d Love To Hear From You</h2>
                            </div>
                            <form class="contact-form-validated contact-one__form" action="assets/inc/sendemail.php"
                                method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <h4 class="contact-one__input-title">First Name <span>*</span></h4>
                                        <div class="contact-one__input-box">
                                            <input type="text" name="name" placeholder="Enter Your First Name"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <h4 class="contact-one__input-title">Last Name <span>*</span></h4>
                                        <div class="contact-one__input-box">
                                            <input type="text" name="name" placeholder="Enter Your Last Name"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <h4 class="contact-one__input-title">Email <span>*</span></h4>
                                        <div class="contact-one__input-box">
                                            <input type="email" name="email" placeholder="Enter Your Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <h4 class="contact-one__input-title">Phone Number <span>*</span></h4>
                                        <div class="contact-one__input-box">
                                            <input type="text" name="Phone" placeholder="Enter Your Phone Number"
                                                required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <h4 class="contact-one__input-title">Message <span>*</span></h4>
                                    <div class="contact-one__input-box text-message-box">
                                        <textarea name="message" placeholder="Enter Your Message"></textarea>
                                    </div>
                                    <div class="contact-one__btn-box">
                                        <button type="submit" class="thm-btn">Send A Message <span
                                                class=" icon-arrow-up-right"></span></button>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                            <p class="contact-one__text">Didn't find what you were trying to find? Write to us at.</p>
                            <p class="contact-one__email"><a href="{{ 'mailto:Info@Nexingmail.com' }}">Info@Nexingmail.Com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact One End -->

        <!--Blog One Start -->
        <section class="blog-one">
            <div class="blog-one__shape-1 float-bob-y">
                <img src="{{ asset('/assets/images/shapes/blog-one-shape-1.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="blog-one__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <span class="section-title__tagline">NEWS & BLOG</span>
                                </div>
                                <h2 class="section-title__title title-animation">Read Our Articles And News</h2>
                            </div>
                            <div class="blog-one__view-all">
                                <a href="{{ route('blog') }}">View all articles <span class="icon-arrow-up-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="blog-one__right">
                            <ul class="blog-one__single-list list-unstyled">
                                <li class="wow fadeInUp" data-wow-delay="100ms">
                                    <div class="blog-one__single">
                                        <div class="blog-one__img-box">
                                            <div class="blog-one__img">
                                                <img src="{{ asset('/assets/images/blog/blog-1-1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="blog-one__content">
                                            <div class="blog-one__meta">
                                                <p>Branding</p>
                                                <span></span>
                                                <p>May 17, 2025</p>
                                            </div>
                                            <h3 class="blog-one__title"><a href="{{ route('blogDetails') }}">The Intersection Of
                                                    Design and Digital Agency</a></h3>
                                            <p class="blog-one__text">Words matter, and our copy writing rh services
                                                ensure your message heard zx loud Whether and clear.</p>
                                            <div class="blog-one__read-more">
                                                <a href="{{ route('blogDetails') }}">Read more<span
                                                        class="icon-arrow-up-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="200ms">
                                    <div class="blog-one__single">
                                        <div class="blog-one__img-box">
                                            <div class="blog-one__img">
                                                <img src="{{ asset('/assets/images/blog/blog-1-2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="blog-one__content">
                                            <div class="blog-one__meta">
                                                <p>Branding</p>
                                                <span></span>
                                                <p>May 17, 2025</p>
                                            </div>
                                            <h3 class="blog-one__title"><a href="{{ route('blogDetails') }}">The Intersection Of
                                                    Design and Digital Agency</a></h3>
                                            <p class="blog-one__text">Words matter, and our copy writing rh services
                                                ensure your message heard zx loud Whether and clear.</p>
                                            <div class="blog-one__read-more">
                                                <a href="{{ route('blogDetails') }}">Read more<span
                                                        class="icon-arrow-up-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="300ms">
                                    <div class="blog-one__single">
                                        <div class="blog-one__img-box">
                                            <div class="blog-one__img">
                                                <img src="{{ asset('/assets/images/blog/blog-1-3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="blog-one__content">
                                            <div class="blog-one__meta">
                                                <p>Branding</p>
                                                <span></span>
                                                <p>May 17, 2025</p>
                                            </div>
                                            <h3 class="blog-one__title"><a href="{{ route('blogDetails') }}">The Intersection Of
                                                    Design and Digital Agency</a></h3>
                                            <p class="blog-one__text">Words matter, and our copy writing rh services
                                                ensure your message heard zx loud Whether and clear.</p>
                                            <div class="blog-one__read-more">
                                                <a href="{{ route('blogDetails') }}">Read more<span
                                                        class="icon-arrow-up-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog One End -->



        

        
        

        
        
    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection

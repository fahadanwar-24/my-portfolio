@extends('frontend.layouts.app')
@section('title', 'Index Two')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerTwo')
    <!-- header area end -->

     


        <!-- Banner Two Start -->
        <section class="banner-two">
            <div class="container">
                <div class="banner-two__inner">
                    <div class="banner-two__social">
                        <ul>
                            <li><a href="{{ '#' }}">Facebook</a></li>
                            <li><a href="{{ '#' }}">Instagram</a></li>
                            <li><a href="{{ '#' }}">LinkedIn</a></li>
                            <li><a href="{{ '#' }}">Twitter</a></li>
                            <li><a href="{{ '#' }}">YouTube</a></li>
                        </ul>
                    </div>
                    <div class="banner-two__title-one">
                        <div class="banner-two__shape-1">
                            <img src="{{ asset('/assets/images/shapes/banner-two-shape-1.png') }}" alt="">
                        </div>
                        <h2>Design Studi <span></span></h2>
                    </div>
                    <div class="banner-two__title-two">
                        <h2>With Experience</h2>
                        <p>we’re a Digital agency offers everything you need to successfully hire & manage your <br> new
                            remote team. Let’s play a creative games with ideas</p>
                    </div>
                    <div class="banner-two__services-list-box">
                        <ul class="banner-two__services-list">
                            <li>
                                <div class="banner-two__services-list-border"></div>
                                <p class="banner-two__services-list-text">UI/UX DESIGN</p>
                            </li>
                            <li>
                                <div class="banner-two__services-list-border"></div>
                                <p class="banner-two__services-list-text">DEVELOPMENTS</p>
                            </li>
                            <li>
                                <div class="banner-two__services-list-border"></div>
                                <p class="banner-two__services-list-text">Motion Graphic</p>
                            </li>
                        </ul>
                    </div>
                    <div class="banner-two__happey-client">
                        <div class="banner-two__happey-client-box">
                            <ul class="banner-two__happey-client-list">
                                <li>
                                    <div class="banner-two__happey-client-img">
                                        <img src="{{ asset('/assets/images/resources/banner-two-two-happy-client-1-1.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-two__happey-client-img">
                                        <img src="{{ asset('/assets/images/resources/banner-two-two-happy-client-1-2.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-two__happey-client-img">
                                        <img src="{{ asset('/assets/images/resources/banner-two-two-happy-client-1-3.jpg') }}" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="banner-two__happey-client-content">
                            <div class="banner-two__happey-client-count">
                                <h3 class="odometer" data-count="35">00</h3>
                                <span>K+</span>
                            </div>
                            <p class="banner-two__happey-client-text">happy clients <br> of our <br> Services</p>
                        </div>
                    </div>
                    <div class="banner-two__best-agency">
                        <div class="banner-two__best-agency-icon">
                            <span class="icon-world"></span>
                        </div>
                        <div class="banner-two__best-agency-text">
                            <h4>Agency of this year <br> worldwide</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Banner Two End -->

        <!--Explore Two Start -->
        <section class="explore-two">
            <div class="explore-two__bg" style="background-image: url(assets/images/backgrounds/explore-two-bg.jpg);">
            </div>
            <div class="explore-two__rounded-text">
                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                    class="explore-two__curved-circle-box video-popup">
                    <div class="curved-circle-2">
                        <span class="curved-circle--item">
                            play intro video play intro video
                        </span>
                    </div><!-- /.curved-circle -->
                    <div class="explore-two__icon">
                        <span class="fas fa-play"></span>
                    </div>
                </a>
            </div>
        </section>
        <!--Explore Two End -->

        <!--Brand Two Start -->
        <section class="brand-two">
            <div class="container">
                <div class="brand-two__wrap">
                    <div class="brand-two__text-box">
                        <p class="brand-two__text">Worked with world’s<br> famous brands and<br> partners</p>
                    </div>
                    <div class="brand-two__inner">
                        <div class="swiper-container brand-two__carousel">
                            <div class="swiper-wrapper">
                                <!--Start Brand One Single-->
                                <div class="swiper-slide">
                                    <div class="brand-two__single">
                                        <div class="brand-two__single-inner">
                                            <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-2-1.png') }}" alt=""></a>
                                        </div>
                                        <div class="brand-two__hover-img">
                                            <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-hover-2-1.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Brand One Single-->

                                <!--Start Brand One Single-->
                                <div class="swiper-slide">
                                    <div class="brand-two__single">
                                        <div class="brand-two__single-inner">
                                            <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-2-2.png') }}" alt=""></a>
                                        </div>
                                        <div class="brand-two__hover-img">
                                            <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-hover-2-2.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Brand One Single-->

                                <!--Start Brand One Single-->
                                <div class="swiper-slide">
                                    <div class="brand-two__single">
                                        <div class="brand-two__single-inner">
                                            <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-2-3.png') }}" alt=""></a>
                                        </div>
                                        <div class="brand-two__hover-img">
                                            <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-hover-2-3.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Brand One Single-->

                                <!--Start Brand One Single-->
                                <div class="swiper-slide">
                                    <div class="brand-two__single">
                                        <div class="brand-two__single-inner">
                                            <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-2-4.png') }}" alt=""></a>
                                        </div>
                                        <div class="brand-two__hover-img">
                                            <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-hover-2-4.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Brand One Single-->

                                <!--Start Brand One Single-->
                                <div class="swiper-slide">
                                    <div class="brand-two__single">
                                        <div class="brand-two__single-inner">
                                            <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-2-5.png') }}" alt=""></a>
                                        </div>
                                        <div class="brand-two__hover-img">
                                            <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-hover-2-5.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Brand One Single-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand Two End -->

        <!--About Two Start -->
        <section class="about-two">
            <div class="about-two__shape-1 rotate-me">
                <img src="{{ asset('/assets/images/shapes/about-two-shape-1.png') }}" alt="">
            </div>
            <div class="about-two__img-two">
                <img src="{{ asset('/assets/images/resources/about-two-img-2.jpg') }}" alt="">
                <div class="about-two__project-complete">
                    <p><span class="odometer" data-count="35">00</span>k+ Project Complated</p>
                </div>
            </div>
            <div class="container">
                <div class="section-title-two text-left sec-title-animation animation-style2">
                    <div class="section-title-two__tagline-box">
                        <span class="section-title-two__tagline">WHO WE ARE</span>
                        <div class="section-title-two__tagline-shape"></div>
                    </div>
                    <h2 class="section-title-two__title title-animation">We Use Innovative Design To <br>Maximize Your
                        Company's<br> Potential.
                    </h2>
                </div>
                <div class="about-two__inner">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="about-two__left">
                                <div class="about-two__img-box">
                                    <div class="about-two__img">
                                        <img src="{{ asset('/assets/images/resources/about-two-img-1.png') }}" alt="">
                                    </div>
                                    <div class="about-two__experience-box">
                                        <div class="about-two__experience-count">
                                            <h3 class="odometer" data-count="25">00</h3>
                                            <span>+</span>
                                        </div>
                                        <p class="about-two__experience-count-text">Years Of Experience</p>
                                    </div>
                                    <div class="about-two__img-shape-1"></div>
                                    <div class="about-two__img-shape-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="about-two__right">
                                <p class="about-two__text-1">To be the leading creative agency recognized for our<br>
                                    ability to turn bold ideas into tangible results.</p>
                                <p class="about-two__text-2">Established in 1995, NEXIN has been a leading force in the
                                    digital landscape<br> for over two decades. We're a passionate team of designers,
                                    developers,<br> and strategists driven by a shared vision. Our digital agency</p>
                                <ul class="about-two__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <p>Web Design and Development</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <p>Social Media Management</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <p>Branding and Identity</p>
                                    </li>
                                </ul>
                                <div class="about-two__more-btn">
                                    <a href="{{ route('about') }}">More About<span class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End -->

        <!--Service Two Start -->
        <section class="services-two">
            <div class="container">
                <div class="services-two__top">
                    <div class="section-title-two text-left sec-title-animation animation-style2">
                        <div class="section-title-two__tagline-box">
                            <span class="section-title-two__tagline">We're a team of</span>
                            <div class="section-title-two__tagline-shape"></div>
                        </div>
                        <h2 class="section-title-two__title title-animation">Originative about<br> unique ideas.
                        </h2>
                    </div>
                    <div class="services-two__btn-box">
                        <a href="{{ route('services') }}">All Services<span class="icon-arrow-up-right"></span></a>
                    </div>
                </div>
                <div class="services-two__bottom">
                    <!--Services Two Single Start-->
                    <div class="services-two__single">
                        <div class="services-two__content-box">
                            <ul class="services-two__content-list list-unstyled">
                                <li>
                                    <div class="services-two__icon-and-title">
                                        <div class="services-two__icon">
                                            <span class="icon-agency"></span>
                                        </div>
                                        <h3 class="services-two__title"><a
                                                href="{{ route('serviceDetails') }}"><span>Innovative<br></span>digital
                                                solution</a>
                                        </h3>
                                    </div>
                                    <p class="services-two__single-text">Enhance your online visibility & drive organic
                                        traffic<br> with our advanced SEO techniques. We optimize<br> your website to
                                        rank
                                        higher.</p>
                                </li>
                                <li>
                                    <div class="services-two__icon-and-title">
                                        <div class="services-two__icon">
                                            <span class="icon-creative"></span>
                                        </div>
                                        <h3 class="services-two__title"><a href="{{ route('serviceDetails') }}"><span>UX/UI
                                                    &<br>
                                                </span>website designing</a></h3>
                                    </div>
                                    <p class="services-two__single-text">Enhance your online visibility & drive organic
                                        traffic<br> with our advanced SEO techniques. We optimize<br> your website to
                                        rank
                                        higher.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__img-box">
                            <div class="services-two__img">
                                <img src="{{ asset('/assets/images/services/services-2-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--Services Two Single End-->
                    <!--Services Two Single Start-->
                    <div class="services-two__single">
                        <div class="services-two__img-box">
                            <div class="services-two__img">
                                <img src="{{ asset('/assets/images/services/services-2-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="services-two__content-box">
                            <ul class="services-two__content-list list-unstyled">
                                <li>
                                    <div class="services-two__icon-and-title">
                                        <div class="services-two__icon">
                                            <span class="icon-market"></span>
                                        </div>
                                        <h3 class="services-two__title"><a
                                                href="{{ route('serviceDetails') }}"><span>Market<br></span>research &
                                                strategy</a>
                                        </h3>
                                    </div>
                                    <p class="services-two__single-text">Enhance your online visibility & drive organic
                                        traffic<br> with our advanced SEO techniques. We optimize<br> your website to
                                        rank
                                        higher.</p>
                                </li>
                                <li>
                                    <div class="services-two__icon-and-title">
                                        <div class="services-two__icon">
                                            <span class="icon-branding"></span>
                                        </div>
                                        <h3 class="services-two__title"><a
                                                href="{{ route('serviceDetails') }}"><span>Business<br>
                                                </span>campaign consultation</a></h3>
                                    </div>
                                    <p class="services-two__single-text">Enhance your online visibility & drive organic
                                        traffic<br> with our advanced SEO techniques. We optimize<br> your website to
                                        rank
                                        higher.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Services Two Single End-->
                </div>
            </div>
        </section>
        <!--Service Two End -->

        <!--Video Two Start -->
        <section class="video-two">
            <div class="video-two__bg" style="background-image: url(assets/images/backgrounds/video-two-bg.jpg);"></div>
            <div class="container">
                <div class="video-two__inner">
                    <div class="video-two__video-wrap">
                        <div class="video-two__video-link">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="video-two__video-icon">
                                    <span class="fa fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                            <h4 class="video-two__video-sub-title">Watch<br> Video</h4>
                        </div>
                        <h3 class="video-two__title">We're a Digital design<br> agency that gets <br>excited about.
                        </h3>
                    </div>
                    <div class="video-two__btn-box">
                        <a href="{{ route('serviceDetails') }}">GET THE SERVICES<span class="icon-arrow-up-right"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!--Video Two End -->

        <!--Portfolio Two Start -->
        <section class="portfolio-two">
            <div class="container">
                <div class="section-title-two text-center sec-title-animation animation-style1">
                    <div class="section-title-two__tagline-box">
                        <span class="section-title-two__tagline">Features Works</span>
                        <div class="section-title-two__tagline-shape"></div>
                    </div>
                    <h2 class="section-title-two__title title-animation">Resent Case Study</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="portfolio-two__left">
                            <!--Portfolio Two Single Start-->
                            <div class="portfolio-two__single portfolio-two__single-1">
                                <div class="portfolio-two__content">
                                    <div class="portfolio-two__sub-title-box">
                                        <p class="portfolio-two__sub-title">WEB DEVELOPMENT</p>
                                        <div class="portfolio-two__sub-title-shape-1"></div>
                                    </div>
                                    <h3 class="portfolio-two__title"><a href="{{ route('portfolioDetails') }}">Digital agency
                                            bring specialized knowledge and experience</a></h3>
                                </div>
                                <div class="portfolio-two__img-box">
                                    <div class="portfolio-two__img">
                                        <img src="{{ asset('/assets/images/project/portfolio-2-1.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio Two Single End-->
                            <!--Portfolio Two Single Start-->
                            <div class="portfolio-two__single">
                                <div class="portfolio-two__content">
                                    <div class="portfolio-two__sub-title-box">
                                        <p class="portfolio-two__sub-title">MARKETING</p>
                                        <div class="portfolio-two__sub-title-shape-1"></div>
                                    </div>
                                    <h3 class="portfolio-two__title"><a href="{{ route('portfolioDetails') }}">Photo shooting &
                                            Creative<br> Product Edting</a></h3>
                                </div>
                                <div class="portfolio-two__img-box">
                                    <div class="portfolio-two__img">
                                        <img src="{{ asset('/assets/images/project/portfolio-2-2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--Portfolio Two Single End-->
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="portfolio-two__right">
                            <!--Portfolio Two Single Start-->
                            <div class="portfolio-two__single-2">
                                <div class="portfolio-two__img-box">
                                    <div class="portfolio-two__img">
                                        <img src="{{ asset('/assets/images/project/portfolio-2-3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="portfolio-two__content">
                                    <div class="portfolio-two__sub-title-box">
                                        <p class="portfolio-two__sub-title">BRANDING</p>
                                        <div class="portfolio-two__sub-title-shape-1"></div>
                                    </div>
                                    <h3 class="portfolio-two__title"><a href="{{ route('portfolioDetails') }}">Blue Business and
                                            mockup cards<br> color standard</a></h3>
                                </div>
                            </div>
                            <!--Portfolio Two Single End-->
                            <!--Portfolio Two Single Start-->
                            <div class="portfolio-two__single-2 portfolio-two__single-4">
                                <div class="portfolio-two__img-box">
                                    <div class="portfolio-two__img">
                                        <img src="{{ asset('/assets/images/project/portfolio-2-4.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="portfolio-two__content">
                                    <div class="portfolio-two__sub-title-box">
                                        <p class="portfolio-two__sub-title">UI/UX</p>
                                        <div class="portfolio-two__sub-title-shape-1"></div>
                                    </div>
                                    <h3 class="portfolio-two__title"><a href="{{ route('portfolioDetails') }}">Simple black &
                                            white User<br> interface design </a></h3>
                                </div>
                            </div>
                            <!--Portfolio Two Single End-->
                            <div class="portfolio-two__view-all">
                                <a href="{{ route('portfolio') }}">View All Work<span class="icon-arrow-up-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Two End -->

        <!--Why Choose Two Start -->
        <section class="why-choose-two">
            <div class="why-choose-two__bg"
                style="background-image: url(assets/images/backgrounds/why-choose-two-bg.jpg);"></div>
            <div class="container">
                <div class="why-choose-two__inner">
                    <div class="section-title-two text-left sec-title-animation animation-style2">
                        <div class="section-title-two__tagline-box">
                            <span class="section-title-two__tagline">WHy BEST NEXIN</span>
                            <div class="section-title-two__tagline-shape"></div>
                        </div>
                        <h2 class="section-title-two__title title-animation">Empowering Brands<br> With Creative
                            Digital<br> Solutions </h2>
                    </div>
                    <div class="why-choose-two__points-box">
                        <ul class="why-choose-two__points-list why-choose-two__points-list-1 list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <h3 class="why-choose-two__title">Creative Design Approach</h3>
                                <p class="why-choose-two__text">We believe that the surest measure of success<br> is
                                    when our partners with us more than </p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <h3 class="why-choose-two__title">Results-Driven Marketing</h3>
                                <p class="why-choose-two__text">We believe that the surest measure of success<br> is
                                    when our partners with us more than </p>
                            </li>
                        </ul>
                        <ul class="why-choose-two__points-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <h3 class="why-choose-two__title">Custom Strategy</h3>
                                <p class="why-choose-two__text">We believe that the surest measure of success<br> is
                                    when our partners with us more than </p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <h3 class="why-choose-two__title"> Experienced Passionate Team</h3>
                                <p class="why-choose-two__text">We believe that the surest measure of success<br> is
                                    when our partners with us more than </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose Two End -->

        <!--Testimonial Two Start -->
        <section class="testimonial-two">
            <div class="container">
                <div class="section-title-two text-center sec-title-animation animation-style1">
                    <div class="section-title-two__tagline-box">
                        <span class="section-title-two__tagline">Testimonials</span>
                        <div class="section-title-two__tagline-shape"></div>
                    </div>
                    <h2 class="section-title-two__title title-animation">What People about say </h2>
                </div>
                <div class="testimonial-two__carousel swiper-container">
                    <div class="swiper-wrapper">
                        <!--Testimonial Two Single Start-->
                        <div class="swiper-slide">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__ratting">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <p class="testimonial-two__text">“From keyword research and on-page optimization to link
                                    building and technical SEO, we use proven strategies to improve your visibility and
                                    authority online.”</p>
                                <div class="testimonial-two__client-box">
                                    <div class="testimonial-two__client-img">
                                        <img src="{{ asset('/assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-two__client-content">
                                        <h4><a href="{{ route('testimonials') }}">Michel Smith</a></h4>
                                        <p>Cloth Store Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                        <!--Testimonial Two Single Start-->
                        <div class="swiper-slide">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__ratting">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <p class="testimonial-two__text">“From keyword research and on-page optimization to link
                                    building and technical SEO, we use proven strategies to improve your visibility and
                                    authority online.”</p>
                                <div class="testimonial-two__client-box">
                                    <div class="testimonial-two__client-img">
                                        <img src="{{ asset('/assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-two__client-content">
                                        <h4><a href="{{ route('testimonials') }}">Adam Smith</a></h4>
                                        <p>Cloth Store Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                        <!--Testimonial Two Single Start-->
                        <div class="swiper-slide">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__ratting">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <p class="testimonial-two__text">“From keyword research and on-page optimization to link
                                    building and technical SEO, we use proven strategies to improve your visibility and
                                    authority online.”</p>
                                <div class="testimonial-two__client-box">
                                    <div class="testimonial-two__client-img">
                                        <img src="{{ asset('/assets/images/testimonial/testimonial-2-3.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-two__client-content">
                                        <h4><a href="{{ route('testimonials') }}">Jecika Brown</a></h4>
                                        <p>Cloth Store Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                        <!--Testimonial Two Single Start-->
                        <div class="swiper-slide">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__ratting">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <p class="testimonial-two__text">“From keyword research and on-page optimization to link
                                    building and technical SEO, we use proven strategies to improve your visibility and
                                    authority online.”</p>
                                <div class="testimonial-two__client-box">
                                    <div class="testimonial-two__client-img">
                                        <img src="{{ asset('/assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-two__client-content">
                                        <h4><a href="{{ route('testimonials') }}">Michel Smith</a></h4>
                                        <p>Cloth Store Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                        <!--Testimonial Two Single Start-->
                        <div class="swiper-slide">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__ratting">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <p class="testimonial-two__text">“From keyword research and on-page optimization to link
                                    building and technical SEO, we use proven strategies to improve your visibility and
                                    authority online.”</p>
                                <div class="testimonial-two__client-box">
                                    <div class="testimonial-two__client-img">
                                        <img src="{{ asset('/assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-two__client-content">
                                        <h4><a href="{{ route('testimonials') }}">Adam Smith</a></h4>
                                        <p>Cloth Store Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-nav-style-one">
                        <div class="swiper-dot-style1"></div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="testimonial-two__nav">
                        <div class="swiper-button-next1">
                            <i class="icon-left-arrow"></i>
                        </div>
                        <div class="swiper-button-prev1">
                            <i class="icon-right-arrow"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Two End -->

        <!--Awards One Start -->
        <section class="awards-one">
            <div class="container">
                <div class="awards-one__inner">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="awards-one__left">
                                <div class="section-title-two text-left sec-title-animation animation-style2">
                                    <div class="section-title-two__tagline-box">
                                        <span class="section-title-two__tagline">Awards</span>
                                        <div class="section-title-two__tagline-shape"></div>
                                    </div>
                                    <h2 class="section-title-two__title title-animation">Awards & Recognitions</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="awards-one__right">
                                <ul class="awards-one__list list-unstyled clearfix">
                                    <li class="cs-hover_tab-2 clearfix">
                                        <div class="awards-one__single">
                                            <div class="awards-one__year">
                                                <span>2017</span>
                                            </div>
                                            <div class="awards-one__content-inner">
                                                <div class="awards-one__content">
                                                    <h3 class="awards-one__title"><a href="{{ '#' }}">Money Laundering</a></h3>
                                                    <div class="awards-one__meta">
                                                        <p>Branding / marketing / development</p>
                                                    </div>
                                                </div>
                                                <div class="awards-one__name">
                                                    <h4>Webflow</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="awards-one__img-box"
                                            data-src="assets/images/resources/awards-one-img-1.jpg">
                                        </div>
                                    </li>
                                    <li class="cs-hover_tab-2 clearfix active">
                                        <div class="awards-one__single">
                                            <div class="awards-one__year">
                                                <span>2022</span>
                                            </div>
                                            <div class="awards-one__content-inner">
                                                <div class="awards-one__content">
                                                    <h3 class="awards-one__title"><a href="{{ '#' }}">Decentralized Lending</a>
                                                    </h3>
                                                    <div class="awards-one__meta">
                                                        <p>marketing / development</p>
                                                    </div>
                                                </div>
                                                <div class="awards-one__name">
                                                    <h4>ThemeForest</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="awards-one__img-box"
                                            data-src="assets/images/resources/awards-one-img-2.jpg">
                                        </div>
                                    </li>
                                    <li class="cs-hover_tab-2 clearfix">
                                        <div class="awards-one__single">
                                            <div class="awards-one__year">
                                                <span>2023</span>
                                            </div>
                                            <div class="awards-one__content-inner">
                                                <div class="awards-one__content">
                                                    <h3 class="awards-one__title"><a href="{{ '#' }}">Anti Money</a></h3>
                                                    <div class="awards-one__meta">
                                                        <p>Business / Development</p>
                                                    </div>
                                                </div>
                                                <div class="awards-one__name">
                                                    <h4>Framer</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="awards-one__img-box"
                                            data-src="assets/images/resources/awards-one-img-3.jpg">
                                        </div>
                                    </li>
                                    <li class="cs-hover_tab-2 clearfix">
                                        <div class="awards-one__single">
                                            <div class="awards-one__year">
                                                <span>2023</span>
                                            </div>
                                            <div class="awards-one__content-inner">
                                                <div class="awards-one__content">
                                                    <h3 class="awards-one__title"><a href="{{ '#' }}">Shopify Redesign</a></h3>
                                                    <div class="awards-one__meta">
                                                        <p>Branding / marketing / Website</p>
                                                    </div>
                                                </div>
                                                <div class="awards-one__name">
                                                    <h4>Template Monster</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="awards-one__img-box"
                                            data-src="assets/images/resources/awards-one-img-4.jpg">
                                        </div>
                                    </li>
                                    <li class="cs-hover_tab-2 clearfix">
                                        <div class="awards-one__single">
                                            <div class="awards-one__year">
                                                <span>2024</span>
                                            </div>
                                            <div class="awards-one__content-inner">
                                                <div class="awards-one__content">
                                                    <h3 class="awards-one__title"><a href="{{ '#' }}">Product Lineup</a></h3>
                                                    <div class="awards-one__meta">
                                                        <p>Business / marketing / development</p>
                                                    </div>
                                                </div>
                                                <div class="awards-one__name">
                                                    <h4>ThemeForest</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="awards-one__img-box"
                                            data-src="assets/images/resources/awards-one-img-5.jpg">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Awards One End -->

        <!--Blog Two Start -->
        <section class="blog-two">
            <div class="container">
                <div class="blog-two__inner">
                    <div class="section-title-two text-center sec-title-animation animation-style1">
                        <div class="section-title-two__tagline-box">
                            <span class="section-title-two__tagline">Our Blog</span>
                            <div class="section-title-two__tagline-shape"></div>
                        </div>
                        <h2 class="section-title-two__title title-animation">Stay Updated with Our<br> Latest Blogs.
                        </h2>
                    </div>
                    <div class="row">
                        <!--Blog Two Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
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
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
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
                        <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
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
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Two End -->

        <!-- Sliding Text One Start -->
        <section class="sliding-text-one">
            <div class="sliding-text-one__wrap">
                <ul class="sliding-text__list list-unstyled marquee_mode">
                    <li>
                        <h2 data-hover="Let’s Talk" class="sliding-text__title">Let’s Talk</h2>
                    </li>
                    <li>
                        <div class="sliding-text__img">
                            <img src="{{ asset('/assets/images/icon/sliding-text-icon-1.png') }}" alt="">
                        </div>
                    </li>
                    <li>
                        <h2 data-hover="Let’s Talk" class="sliding-text__title">Let’s Talk</h2>
                    </li>
                    <li>
                        <div class="sliding-text__img">
                            <img src="{{ asset('/assets/images/icon/sliding-text-icon-1.png') }}" alt="">
                        </div>
                    </li>
                    <li>
                        <h2 data-hover="Let’s Talk" class="sliding-text__title">Let’s Talk</h2>
                    </li>
                    <li>
                        <div class="sliding-text__img">
                            <img src="{{ asset('/assets/images/icon/sliding-text-icon-1.png') }}" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Sliding Text One End -->

        

        

        
        
        
        
        
    <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection

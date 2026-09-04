@extends('frontend.layouts.app')
@section('title', 'About us')
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
                    <h3>About Us</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Four Start-->
        <section class="about-four">
            <div class="container">
                <div class="about-four__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="about-four__top-left">
                                <h3 class="about-four__top-title">We have the experience to help you grow</h3>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5">
                            <div class="about-four__top-right">
                                <div class="about-four__top-right-shape-1">
                                    <img src="{{ asset('/assets/images/shapes/about-four-top-right-shape-1.png') }}" alt="">
                                </div>
                                <p class="about-four__top-text">Vestibulum pulvinar ante auctor, vulputate dui sed<br>
                                    condimentum ex nullam pharetra suscipit entum<br> integer vitae sapien vel est
                                    commodo
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-four__img-1">
                    <img src="{{ asset('/assets/images/resources/about-four-img-1.jpg') }}" alt="">
                </div>
                <div class="about-four__content">
                    <h2 class="about-four__title-1">Your brand is the most important asset in your<br> company let our
                        team
                        of
                        professionals help<br> you with a good strategy</h2>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <div class="about-four__experience-box">
                                <div class="about-four__experience-count">
                                    <h3 class="odometer" data-count="25">00</h3>
                                    <span>+</span>
                                </div>
                                <p class="about-four__experience-count-text">Years Of Experience</p>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="about-four__single-list">
                                <div class="row">
                                    <!--About Four Single Start-->
                                    <div class="col-xl-6">
                                        <div class="about-four__single">
                                            <P class="about-four__text">Established in 1995, NEXIN has been a leading
                                                force<br>
                                                in
                                                the digital landscape for over two decades.<br> We're a passionate team
                                                of
                                                designers, </P>
                                            <div class="about-four__btn">
                                                <a href="{{ route('about') }}">More About Us<span
                                                        class="icon-arrow-up-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--About Four Single End-->
                                    <!--About Four Single Start-->
                                    <div class="col-xl-6">
                                        <div class="about-four__single about-four__single-2">
                                            <P class="about-four__text">Established in 1995, NEXIN has been a leading
                                                force<br>
                                                in
                                                the digital landscape for over two decades.<br> We're a passionate team
                                                of
                                                designers, </P>
                                            <div class="about-four__btn">
                                                <a href="{{ route('about') }}">Get In Touch<span
                                                        class="icon-arrow-up-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--About Four Single End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-four__bottom">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-four__bottom-left">
                                <div class="about-four__bottom-img">
                                    <img src="{{ asset('/assets/images/resources/about-four-bottom-img.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-four__bottom-right">
                                <ul class="about-four__count-list list-unstyled">
                                    <li>
                                        <div class="about-four__count-and-text-single">
                                            <div class="about-four__count-box">
                                                <div class="about-four__count">
                                                    <h3 class="odometer" data-count="100">00</h3>
                                                    <span>+</span>
                                                </div>
                                                <p class="about-four__count-text">Success projects</p>
                                            </div>
                                            <p class="about-four__count-list-text">Vestibulum pulvinar ante auctor,
                                                vulputate<br> dui sed condimentum ex nullam pharetra<br> suscipit entum
                                                integer vitae sapien vel </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-four__count-and-text-single">
                                            <div class="about-four__count-box">
                                                <div class="about-four__count">
                                                    <span>$</span>
                                                    <h3 class="odometer" data-count="25">00</h3>
                                                    <span>M</span>
                                                </div>
                                                <p class="about-four__count-text">Revenue generated</p>
                                            </div>
                                            <p class="about-four__count-list-text">Vestibulum pulvinar ante auctor,
                                                vulputate<br> dui sed condimentum ex nullam pharetra<br> suscipit entum
                                                integer vitae sapien vel </p>
                                        </div>
                                    </li>
                                </ul>
                                <p class="about-four__bottom-text-1">Currently work at google digital experiences and
                                    print
                                    materials that communicate clearly. My job is to build your website so that way of
                                    giving approaches.</p>
                                <p class="about-four__bottom-text-2">Currently work at google digital experiences and
                                    print
                                    materials that communicate clearly. My job is to build your website so that it is
                                    functional and user friendly but at the same times attractive way of giving
                                    approaches.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-four__brand">
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
        <!--About Four End-->

        <!-- Team Two Start -->
        <section class="team-two team-three">
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
                                <h3 class="team-two__title"><a href="{{ route('teamDetails') }}">Helman Calderon</a></h3>
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
                                                    <h3 class="testimonial-one__name"><a href="{{ route('testimonials') }}">Jackson
                                                            Hobber</a>
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
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
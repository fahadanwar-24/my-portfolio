@extends('frontend.layouts.app')
@section('title', 'Services Details')
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
                    <h3>Services Details</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Services Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Services Details Start-->
        <section class="services-details">
            <div class="container">
                <div class="services-details__top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="services-details__top-left">
                                <h3 class="services-details__top-title">UI/UX Design from Professionals</h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="services-details__top-text">
                                <p class="services-details__top-text-1">At Agenko we offer a wide range of services
                                    designed to elevate your brand and drive growth. Our multidisciplinary team of
                                    designers, strategists,</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="services-details__top-text-two">
                                <p class="services-details__top-text-2">and marketers work collaboratively to bring your
                                    vision to life through innovative and impactful solutions. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-details__img">
                    <img src="{{ asset('/assets/images/services/services-details-img-1.jpg') }}" alt="">
                </div>
                <div class="services-details__content">
                    <h3 class="services-details__title-1">Service Overview</h3>
                    <p class="services-details__text-1">Your brand is more than just a logo – it’s the face of your
                        business and the key to making a lasting impression. Our team dives deep into understanding your
                        goals, target audience, and unique value proposition to create a brand strategy that sets you
                        apart from competitors. We ensure that every element of your brand reflects its personality and
                        mission. </p>
                    <div class="services-details__points-box">
                        <ul class="services-details__points-list list-unstyled">
                            <li>
                                <p>+ API Development</p>
                            </li>
                            <li>
                                <p>+ Cloud Migration</p>
                            </li>
                            <li>
                                <p>+ JavaScript</p>
                            </li>
                        </ul>
                        <ul class="services-details__points-list list-unstyled">
                            <li>
                                <p>+ WordPress</p>
                            </li>
                            <li>
                                <p>+ Front End Development</p>
                            </li>
                            <li>
                                <p>+ Flutter Framework</p>
                            </li>
                        </ul>
                    </div>
                    <h3 class="services-details__title-2">Key Features</h3>
                    <p class="services-details__text-2">We specialize in creating compelling visual identities that
                        resonate with your audience and reflect your brand's core values. Our design team blends
                        creativity with strategy to produce logos, color palettes, typography, and graphic elements that
                        convey your brand’s message. Whether you're launching a new brand or refreshing an existing one,
                        we ensure your visuals are cohesive and consistent across all platforms.</p>
                    <div class="services-details__img-box">
                        <div class="row">
                            <div class="col-xl-8 col-lg-7">
                                <div class="services-details__img-box-img">
                                    <img src="{{ asset('/assets/images/services/services-details-img-box-img-1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="services-details__img-box-img-2">
                                    <img src="{{ asset('/assets/images/services/services-details-img-box-img-2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="services-details__text-3">A well-designed website is crucial to building credibility and
                        engaging your audience. We create beautiful, user-friendly websites that not only look great but
                        also function seamlessly across all devices. Our design process is user-centered, ensuring the
                        final product delivers an optimal experience. We build websites with scalability in mind,
                        integrating e-commerce solutions, responsive design, </p>
                    <p class="services-details__text-4">In the digital age, having a strong online presence is
                        essential. We offer comprehensive digital marketing services, including social media management,
                        content creation, and pay-per-click (PPC) advertising. Our goal is to help you connect with your
                        audience, increase engagement, and build brand loyalty.</p>
                </div>
            </div>
        </section>
        <!--Services Details End-->

        <!--Brand Four Start-->
        <section class="brand-four">
            <div class="container">
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
        <!--Brand Four End-->

        <!--FAQ Two Start-->
        <section class="faq-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <div class="faq-two__left">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What services does your creative agency offer?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Our process for creating a visual identity begins with in-depth research
                                                and brand discovery. We then develop creative concepts, refine them
                                                through impactful design that resonates with your audience.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active wow fadeInRight" data-wow-delay="100ms"
                                    data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What is the typical timeline for a project?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Our process for creating a visual identity begins with in-depth research
                                                and brand discovery. We then develop creative concepts, refine them
                                                through impactful design that resonates with your audience.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>What is your process for creating a visual identity?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Our process for creating a visual identity begins with in-depth research
                                                and brand discovery. We then develop creative concepts, refine them
                                                through impactful design that resonates with your audience.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInRight" data-wow-delay="300ms"
                                    data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>How do we get started with your agency?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Our process for creating a visual identity begins with in-depth research
                                                and brand discovery. We then develop creative concepts, refine them
                                                through impactful design that resonates with your audience.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>Do you work with startups or established brands?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Our process for creating a visual identity begins with in-depth research
                                                and brand discovery. We then develop creative concepts, refine them
                                                through impactful design that resonates with your audience.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                                    <div class="accrodion-title">
                                        <h4>Can you help with website design and development?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Our process for creating a visual identity begins with in-depth research
                                                and brand discovery. We then develop creative concepts, refine them
                                                through impactful design that resonates with your audience.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4">
                        <div class="faq-two__right">
                            <div class="faq-two__img">
                                <img src="{{ asset('/assets/images/resources/faq-two-img-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ Two End-->
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
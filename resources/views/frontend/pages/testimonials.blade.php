@extends('frontend.layouts.app')
@section('title', 'Testimonial')
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
                    <h3>Testimonial</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Testimonial</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Testimonial Four Start-->
        <section class="testimonial-four">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">OUR TESTIMONIALS</span>
                    </div>
                    <h2 class="section-title__title title-animation">Hear Real Stories from Happy Clients</h2>
                </div>
                <div class="row">
                    <!--Testimonial Four Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="testimonial-four__single">
                            <p class="testimonial-four__text">“Job portals often provide resources and tools to support
                                job seekers in their job search process, including resume writing tips, interview
                                preparation guides, career advice articles, and webinars or workshops on professional
                                development topics.”</p>
                            <div class="testimonial-four__client-info">
                                <div class="testimonial-four__client-img">
                                    <img src="{{ asset('/assets/images/testimonial/testimonial-4-1.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-four__client-content">
                                    <h3 class="testimonial-four__client-name">Esther Howard</h3>
                                    <p class="testimonial-four__client-sub-title">Business Student</p>
                                    <div class="testimonial-four__ratting">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                    <!--Testimonial Four Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="testimonial-four__single">
                            <p class="testimonial-four__text">“Job portals often provide resources and tools to support
                                job seekers in their job search process, including resume writing tips, interview
                                preparation guides, career advice articles, and webinars or workshops on professional
                                development topics.”</p>
                            <div class="testimonial-four__client-info">
                                <div class="testimonial-four__client-img">
                                    <img src="{{ asset('/assets/images/testimonial/testimonial-4-2.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-four__client-content">
                                    <h3 class="testimonial-four__client-name">Jenny Wilson</h3>
                                    <p class="testimonial-four__client-sub-title">Business Student</p>
                                    <div class="testimonial-four__ratting">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                    <!--Testimonial Four Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="testimonial-four__single">
                            <p class="testimonial-four__text">“Job portals often provide resources and tools to support
                                job seekers in their job search process, including resume writing tips, interview
                                preparation guides, career advice articles, and webinars or workshops on professional
                                development topics.”</p>
                            <div class="testimonial-four__client-info">
                                <div class="testimonial-four__client-img">
                                    <img src="{{ asset('/assets/images/testimonial/testimonial-4-3.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-four__client-content">
                                    <h3 class="testimonial-four__client-name">Robert Fox</h3>
                                    <p class="testimonial-four__client-sub-title">Business Student</p>
                                    <div class="testimonial-four__ratting">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                    <!--Testimonial Four Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="testimonial-four__single">
                            <p class="testimonial-four__text">“Job portals often provide resources and tools to support
                                job seekers in their job search process, including resume writing tips, interview
                                preparation guides, career advice articles, and webinars or workshops on professional
                                development topics.”</p>
                            <div class="testimonial-four__client-info">
                                <div class="testimonial-four__client-img">
                                    <img src="{{ asset('/assets/images/testimonial/testimonial-4-4.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-four__client-content">
                                    <h3 class="testimonial-four__client-name">Jerome Bell</h3>
                                    <p class="testimonial-four__client-sub-title">Business Student</p>
                                    <div class="testimonial-four__ratting">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                    <!--Testimonial Four Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="testimonial-four__single">
                            <p class="testimonial-four__text">“Job portals often provide resources and tools to support
                                job seekers in their job search process, including resume writing tips, interview
                                preparation guides, career advice articles, and webinars or workshops on professional
                                development topics.”</p>
                            <div class="testimonial-four__client-info">
                                <div class="testimonial-four__client-img">
                                    <img src="{{ asset('/assets/images/testimonial/testimonial-4-5.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-four__client-content">
                                    <h3 class="testimonial-four__client-name">Jacob Jones</h3>
                                    <p class="testimonial-four__client-sub-title">Business Student</p>
                                    <div class="testimonial-four__ratting">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                    <!--Testimonial Four Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="testimonial-four__single">
                            <p class="testimonial-four__text">“Job portals often provide resources and tools to support
                                job seekers in their job search process, including resume writing tips, interview
                                preparation guides, career advice articles, and webinars or workshops on professional
                                development topics.”</p>
                            <div class="testimonial-four__client-info">
                                <div class="testimonial-four__client-img">
                                    <img src="{{ asset('/assets/images/testimonial/testimonial-4-6.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-four__client-content">
                                    <h3 class="testimonial-four__client-name">Leslie Alexander</h3>
                                    <p class="testimonial-four__client-sub-title">Business Student</p>
                                    <div class="testimonial-four__ratting">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Four Single End-->
                </div>
            </div>
        </section>
        <!--Testimonial Four End-->
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
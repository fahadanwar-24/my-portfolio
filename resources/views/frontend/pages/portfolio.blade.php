@extends('frontend.layouts.app')
@section('title', 'Portfolio')
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
                    <h3>Portfolio</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Portfolio Page Start-->
        <section class="portfolio-page">
            <div class="container">
                <div class="row">
                    <!--Portfolio Page Single Start-->
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="portfolio-page__single">
                            <div class="portfolio-page__img-box">
                                <div class="portfolio-page__img">
                                    <img src="{{ asset('/assets/images/project/portfolio-page-1-1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="portfolio-page__content">
                                <div class="portfolio-page__title-box">
                                    <p class="portfolio-page__sub-title">Solution</p>
                                    <h3 class="portfolio-page__title"><a href="{{ route('portfolioDetails') }}">Creative
                                            Design</a></h3>
                                </div>
                                <div class="portfolio-page__arrow">
                                    <a href="{{ route('portfolioDetails') }}"><span class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Page Single End-->
                    <!--Portfolio Page Single Start-->
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="portfolio-page__single portfolio-page__single-2">
                            <div class="portfolio-page__img-box">
                                <div class="portfolio-page__img">
                                    <img src="{{ asset('/assets/images/project/portfolio-page-1-2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="portfolio-page__content">
                                <div class="portfolio-page__title-box">
                                    <p class="portfolio-page__sub-title">Solution</p>
                                    <h3 class="portfolio-page__title"><a href="{{ route('portfolioDetails') }}">App
                                            Developments</a></h3>
                                </div>
                                <div class="portfolio-page__arrow">
                                    <a href="{{ route('portfolioDetails') }}"><span class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Page Single End-->
                    <!--Portfolio Page Single Start-->
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="portfolio-page__single portfolio-page__single-3">
                            <div class="portfolio-page__img-box">
                                <div class="portfolio-page__img">
                                    <img src="{{ asset('/assets/images/project/portfolio-page-1-3.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="portfolio-page__content">
                                <div class="portfolio-page__title-box">
                                    <p class="portfolio-page__sub-title">Solution</p>
                                    <h3 class="portfolio-page__title"><a href="{{ route('portfolioDetails') }}">Idea Generate</a>
                                    </h3>
                                </div>
                                <div class="portfolio-page__arrow">
                                    <a href="{{ route('portfolioDetails') }}"><span class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Page Single End-->
                    <!--Portfolio Page Single Start-->
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="portfolio-page__single portfolio-page__single-4">
                            <div class="portfolio-page__img-box">
                                <div class="portfolio-page__img">
                                    <img src="{{ asset('/assets/images/project/portfolio-page-1-4.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="portfolio-page__content">
                                <div class="portfolio-page__title-box">
                                    <p class="portfolio-page__sub-title">Solution</p>
                                    <h3 class="portfolio-page__title"><a href="{{ route('portfolioDetails') }}">Business
                                            Solutions</a></h3>
                                </div>
                                <div class="portfolio-page__arrow">
                                    <a href="{{ route('portfolioDetails') }}"><span class="icon-arrow-up-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Page Single End-->
                </div>
            </div>
        </section>
        <!--Portfolio Page End-->

        <!--Brand Five Start-->
        <section class="brand-five">
            <div class="container">
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

                            <!--Start Brand One Single-->
                            <div class="swiper-slide">
                                <div class="brand-one__single">
                                    <div class="brand-one__single-inner">
                                        <a href="{{ '#' }}"><img src="{{ asset('/assets/images/brand/brand-1-6.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Brand One Single-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand Five End-->
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
@extends('frontend.layouts.app')
@section('title', 'Team Carousel')
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
                    <h3>Team Carousel</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Team Carousel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Team Carousel Page Start -->
        <section class="team-carousel-page">
            <div class="container">
                <div class="swiper-container team-carousel-page__carousel carousel-page-dot-style">
                    <div class="swiper-wrapper">
                        <!--Team One Single Start-->
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
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
                        <!--Team One Single Start-->
                        <div class="swiper-slide">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="{{ asset('/assets/images/team/team-1-5.jpg') }}" alt="">
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
                                    <h3 class="team-one__title"><a href="{{ route('teamDetails') }}">Darlene Robertson</a></h3>
                                    <p class="team-one__sub-title">Product Management</p>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                        <!--Team One Single Start-->
                        <div class="swiper-slide">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="{{ asset('/assets/images/team/team-1-6.jpg') }}" alt="">
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
                                    <h3 class="team-one__title"><a href="{{ route('teamDetails') }}">Courtney Henry</a></h3>
                                    <p class="team-one__sub-title">UI/UX Designer</p>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                    </div>
                    <div class="swiper-nav-style-one">
                        <div class="swiper-dot-style1"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team Carousel Page End -->
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
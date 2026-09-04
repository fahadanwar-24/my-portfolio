@extends('frontend.layouts.app')
@section('title', 'Our Team')
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
                    <h3>Team</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Team One Start -->
        <section class="team-one">
            <div class="container">
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
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
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
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
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
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('/assets/images/team/team-1-7.jpg') }}" alt="">
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
                                <h3 class="team-one__title"><a href="{{ route('teamDetails') }}">Floyd Miles</a></h3>
                                <p class="team-one__sub-title">Manger</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('/assets/images/team/team-1-8.jpg') }}" alt="">
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
                                <h3 class="team-one__title"><a href="{{ route('teamDetails') }}">Theresa Webb</a></h3>
                                <p class="team-one__sub-title">Frontend Developer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team One End -->
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
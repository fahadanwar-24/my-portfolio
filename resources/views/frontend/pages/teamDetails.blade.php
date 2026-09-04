@extends('frontend.layouts.app')
@section('title', 'Team Details')
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
                    <h3>Team Details</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Team Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Team Details Start-->
        <section class="team-details">
            <div class="container">
                <div class="team-details__inner">
                    <div class="team-details__img">
                        <img src="{{ asset('/assets/images/team/team-details-img-1.jpg') }}" alt="">
                    </div>
                    <div class="team-details__content">
                        <div class="team-details__name-and-social">
                            <div class="team-details__name">
                                <h3>Cameron Williamson</h3>
                                <p>Web Developer</p>
                            </div>
                            <div class="team-details__social">
                                <a href="{{ '#' }}"><span class="icon-facebook"></span></a>
                                <a href="{{ '#' }}"><span class="icon-twitter"></span></a>
                                <a href="{{ '#' }}"><span class="icon-instagram"></span></a>
                                <a href="{{ '#' }}"><span class="icon-beeeee"></span></a>
                            </div>
                        </div>
                        <p class="team-details__text">Sem consequat mauris conubia inceptos nostra rutrum morbi sagittis
                            pulvinar, commodo curabitur maecenas fermentum magna tempus nisi ullamcorper, ante auctor
                            magnis pretium eu lectus euismod platea.</p>
                        <div class="team-details__contact-box">
                            <ul class="team-details__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-user"></span>
                                    </div>
                                    <div class="content">
                                        <span>Experience</span>
                                        <p>More Than 15 Years</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <div class="content">
                                        <span>Phone Number</span>
                                        <p><a href="{{ 'tel:2568569575625' }}">+(256) 85695-75625</a></p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="team-details__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="content">
                                        <span>Email Address</span>
                                        <p><a href="{{ 'mailto:Info@gmail.com' }}">Info@gmail.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-fax"></span>
                                    </div>
                                    <div class="content">
                                        <span>Fax</span>
                                        <p><a href="{{ 'tel:6325678913' }}">+6325678913</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="team-details__btn-box">
                            <a href="{{ route('contact') }}" class="thm-btn">Contact Me<span
                                    class="icon-arrow-up-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="team-details__bottom">
                    <h3 class="team-details__bottom-title">About Me</h3>
                    <p class="team-details__bottom-text-1">Volunteers are the backbone of many charitable organizations.
                        They bring enthusiasm, skills, and time, which are crucial for driving the mission forward.
                        Volunteers help in various capacities, from organizing events to directly assisting those in
                        need, making them an indispensable part of the charity ecosystem. Activities may include
                        tutoring, mentoring, serving meals, distributing supplies, or offering companionship to those in
                        need.</p>
                    <p class="team-details__bottom-text-2">Volunteering offers opportunities to develop new skills and
                        gain valuable experience. This can include leadership, communication, project management, and
                        teamwork skills.Volunteers are the backbone of many charitable organizations. They bring
                        enthusiasm, skills, and time, which are crucial for driving the mission forward. Volunteers help
                        in various capacities, from organizing events to directly assisting those in need</p>
                </div>
            </div>
        </section>
        <!--Team Details End-->

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
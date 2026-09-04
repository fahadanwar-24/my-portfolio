@extends('frontend.layouts.app')
@section('title', 'Pricing Table')
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
                    <h3>Pricing Plan</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Pricing Plan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Pricing plan Start-->
        <section class="pricing-two">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">PRICING PLAN</span>
                    </div>
                    <h2 class="section-title__title title-animation">Choose Your Suits Package</h2>
                </div>
                <ul class="list-inline text-center switch-toggler-list" role="tablist" id="switch-toggle-tab">
                    <li class="month active"><a href="{{ '#' }}">Monthly</a></li>
                    <li>
                        <!-- Rounded switch -->
                        <label class="switch on">
                            <span class="slider round"></span>
                        </label>
                    </li>
                    <li class="year"><a href="{{ '#' }}">Yearly</a></li>
                </ul><!-- /.list-inline -->
                <div class="tabed-content">
                    <div id="month">
                        <div class="row">
                            <!--Pricing Two Single Start-->
                            <div class="col-xl-4 col-lg-4">
                                <div class="pricing-two__single">
                                    <p class="pricing-two__sub-title">Starter Plan</p>
                                    <h2 class="pricing-two__price">$500<span>/ per year</span></h2>
                                    <p class="pricing-two__text">A dynamic pack for freelancers, &design small teams.
                                    </p>
                                    <ul class="pricing-two__points-box list-unstyled">
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>10 Hours of task work</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>1 User included</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>Advertising</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>Web developments</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>24/7 Support</p>
                                        </li>
                                    </ul>
                                    <div class="pricing-two__btn-box">
                                        <a href="{{ route('pricing') }}" class="thm-btn">Get Started<span
                                                class="icon-arrow-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Pricing Two Single End-->
                            <!--Pricing Two Single Start-->
                            <div class="col-xl-4 col-lg-4">
                                <div class="pricing-two__single">
                                    <p class="pricing-two__sub-title">Standard Plan</p>
                                    <h2 class="pricing-two__price">$650<span>/ per year</span></h2>
                                    <p class="pricing-two__text">A dynamic pack for freelancers, &design small teams.
                                    </p>
                                    <ul class="pricing-two__points-box list-unstyled">
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>10 Hours of task work</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>1 User included</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>Advertising</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>Web developments</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>24/7 Support</p>
                                        </li>
                                    </ul>
                                    <div class="pricing-two__btn-box">
                                        <a href="{{ route('pricing') }}" class="thm-btn">Get Started<span
                                                class="icon-arrow-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Pricing Two Single End-->
                            <!--Pricing Two Single Start-->
                            <div class="col-xl-4 col-lg-4">
                                <div class="pricing-two__single">
                                    <p class="pricing-two__sub-title">Business Plan</p>
                                    <h2 class="pricing-two__price">$800<span>/ per year</span></h2>
                                    <p class="pricing-two__text">A dynamic pack for freelancers, &design small teams.
                                    </p>
                                    <ul class="pricing-two__points-box list-unstyled">
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>10 Hours of task work</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>1 User included</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>Advertising</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>Web developments</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>24/7 Support</p>
                                        </li>
                                    </ul>
                                    <div class="pricing-two__btn-box">
                                        <a href="{{ route('pricing') }}" class="thm-btn">Get Started<span
                                                class="icon-arrow-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Pricing Two Single End-->
                        </div>
                    </div>
                    <div id="year">
                        <div class="row">
                            <!--Pricing Two Single Start-->
                            <div class="col-xl-4 col-lg-4">
                                <div class="pricing-two__single">
                                    <p class="pricing-two__sub-title">Starter Plan</p>
                                    <h2 class="pricing-two__price">$500<span>/ per year</span></h2>
                                    <p class="pricing-two__text">A dynamic pack for freelancers, &design small teams.
                                    </p>
                                    <ul class="pricing-two__points-box list-unstyled">
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>10 Hours of task work</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>1 User included</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>Advertising</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>Web developments</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>24/7 Support</p>
                                        </li>
                                    </ul>
                                    <div class="pricing-two__btn-box">
                                        <a href="{{ route('pricing') }}" class="thm-btn">Get Started<span
                                                class="icon-arrow-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Pricing Two Single End-->
                            <!--Pricing Two Single Start-->
                            <div class="col-xl-4 col-lg-4">
                                <div class="pricing-two__single">
                                    <p class="pricing-two__sub-title">Standard Plan</p>
                                    <h2 class="pricing-two__price">$650<span>/ per year</span></h2>
                                    <p class="pricing-two__text">A dynamic pack for freelancers, &design small teams.
                                    </p>
                                    <ul class="pricing-two__points-box list-unstyled">
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>10 Hours of task work</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>1 User included</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>Advertising</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>Web developments</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>24/7 Support</p>
                                        </li>
                                    </ul>
                                    <div class="pricing-two__btn-box">
                                        <a href="{{ route('pricing') }}" class="thm-btn">Get Started<span
                                                class="icon-arrow-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Pricing Two Single End-->
                            <!--Pricing Two Single Start-->
                            <div class="col-xl-4 col-lg-4">
                                <div class="pricing-two__single">
                                    <p class="pricing-two__sub-title">Business Plan</p>
                                    <h2 class="pricing-two__price">$800<span>/ per year</span></h2>
                                    <p class="pricing-two__text">A dynamic pack for freelancers, &design small teams.
                                    </p>
                                    <ul class="pricing-two__points-box list-unstyled">
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>10 Hours of task work</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>1 User included</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>Advertising</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>Web developments</p>
                                        </li>
                                        <li>
                                            <div class="pricing-two__points-shape"></div>
                                            <p>24/7 Support</p>
                                        </li>
                                    </ul>
                                    <div class="pricing-two__btn-box">
                                        <a href="{{ route('pricing') }}" class="thm-btn">Get Started<span
                                                class="icon-arrow-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Pricing Two Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Pricing Two End-->
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
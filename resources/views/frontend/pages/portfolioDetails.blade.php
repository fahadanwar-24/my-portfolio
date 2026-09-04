@extends('frontend.layouts.app')
@section('title', 'Portfolio Details')
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
                    <h3>Portfolio Details</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Portfolio Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Portfolio Details Start-->
        <section class="portfolio-details">
            <div class="container">
                <div class="portfolio-details__top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="portfolio-details__top-left">
                                <h3 class="portfolio-details__top-title">Web Design and Development</h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="portfolio-details__top-middle">
                                <p class="portfolio-details__top-text">At our creative agency, we take pride in
                                    delivering unique and impactful solutions for each project we undertake. Our goal is
                                    with the target audience.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="portfolio-details__top-right">
                                <ul class="portfolio-details__top-category-list list-unstyled">
                                    <li>
                                        <p>Category: <span>Development</span></p>
                                    </li>
                                    <li>
                                        <p>Client: <span>Themforest</span></p>
                                    </li>
                                    <li>
                                        <p>Start Date: <span>23 January 2025</span></p>
                                    </li>
                                    <li>
                                        <p>Handover: <span>05 May 2025</span></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-details__img">
                    <img src="{{ asset('/assets/images/project/portfolio-details-img-1.jpg') }}" alt="">
                </div>
                <div class="portfolio-details__content">
                    <h3 class="portfolio-details__title-1">Project Overview</h3>
                    <p class="portfolio-details__text-1">At our creative agency, we are dedicated to crafting bespoke
                        solutions that meet the unique needs of each client. Our diverse project portfolio spans various
                        industries, showcasing our ability to blend creativity with strategy to deliver meaningful and
                        measurable results. From branding and website design to digital marketing and visual identity
                        development, we ensure that every project is executed with precision, creativity, and
                        innovation.</p>
                    <p class="portfolio-details__text-2">We specialize in creating compelling brand identities that
                        capture the essence of businesses and resonate with their target audiences. Our work with
                        clients like AdenkoCorporation demonstrates our ability to revamp brand identities through
                        comprehensive research and strategic design, </p>
                    <div class="portfolio-details__img-box">
                        <div class="row">
                            <div class="col-xl-8 col-lg-7">
                                <div class="portfolio-details__img-box-img-1">
                                    <img src="{{ asset('/assets/images/project/portfolio-details-img-box-img-1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="portfolio-details__img-box-img-2">
                                    <img src="{{ asset('/assets/images/project/portfolio-details-img-box-img-2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="portfolio-details__title-2">Challenges & Constraints</h3>
                    <p class="portfolio-details__text-3">Our team excels in developing and executing powerful digital
                        marketing campaigns that drive engagement and conversions. For clients like ABC Fashion, we
                        created visually stunning promotional materials for social media and online ads, resulting in
                        increased online sales and a stronger digital presence.</p>
                    <div class="portfolio-details__points-box">
                        <ul class="portfolio-details__points list-unstyled">
                            <li>
                                <p><span class="fas fa-plus"></span>Residential real estate involves</p>
                            </li>
                            <li>
                                <p><span class="fas fa-plus"></span>housing and includes single-family .</p>
                            </li>
                            <li>
                                <p><span class="fas fa-plus"></span>With a focus on technology,</p>
                            </li>
                        </ul>
                        <ul class="portfolio-details__points list-unstyled">
                            <li>
                                <p><span class="fas fa-plus"></span>The wise man therefore always hold.</p>
                            </li>
                            <li>
                                <p><span class="fas fa-plus"></span>Obligations of business it will frequently.</p>
                            </li>
                        </ul>
                    </div>
                    <h3 class="portfolio-details__title-3">Projects Solution</h3>
                    <p class="portfolio-details__text-4">In every website design project, we prioritize user experience
                        and brand consistency. Our work for GreenTech Innovations, for instance, involved creating a
                        modern, intuitive website that highlighted their sustainability efforts, resulting in improved
                        user engagement and increased inquiries from potential customers. Our team excels in developing
                        and executing powerful digital marketing campaigns that drive engagement and conversions.</p>
                    <h3 class="portfolio-details__title-4">Final Result</h3>
                    <p class="portfolio-details__text-5">In every website design project, we prioritize user experience
                        and brand consistency. Our work for GreenTech Innovations, for instance, involved creating a
                        modern, intuitive website that highlighted their sustainability efforts, resulting in improved
                        user engagement and increased inquiries from potential customers.</p>
                    <div class="portfolio-details__prev-and-next">
                        <a href="{{ '#' }}"><span class="icon-left-arrow"></span>Previous Post</a>
                        <a href="{{ '#' }}">Next post<span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Details End-->
            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
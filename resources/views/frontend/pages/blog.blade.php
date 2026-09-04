@extends('frontend.layouts.app')
@section('title', 'Blog Grid')
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
                    <h3>Blog Grid</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Blog Grid</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Page Start -->
        <section class="blog-page">
            <div class="container">
                <div class="row">
                    <!--Blog Two Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="300ms">
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
                    <!--Blog Two Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                    <img src="{{ asset('/assets/images/blog/blog-2-4.jpg') }}" alt="">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                    <img src="{{ asset('/assets/images/blog/blog-2-5.jpg') }}" alt="">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                    <img src="{{ asset('/assets/images/blog/blog-2-6.jpg') }}" alt="">
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
                    <div class="services-page__pagination">
                        <ul class="pg-pagination list-unstyled">
                            <li class="prev">
                                <a href="{{ '#' }}" aria-label="prev"><i class="fas fa-angle-left"></i>Prev</a>
                            </li>
                            <li class="count active"><a href="{{ '#' }}">1</a></li>
                            <li class="count"><a href="{{ '#' }}">2</a></li>
                            <li class="count"><a href="{{ '#' }}">3</a></li>
                            <li class="count"><a href="{{ '#' }}">...</a></li>
                            <li class="count"><a href="{{ '#' }}">12</a></li>
                            <li class="next">
                                <a href="{{ '#' }}" aria-label="Next">Next<i class="fas fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Page End -->

            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
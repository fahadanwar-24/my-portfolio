@extends('frontend.layouts.app')
@section('title', 'Blog List')
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
                    <h3>Blog List</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Blog List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog List Start-->
        <section class="blog-list">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-list__left">
                            <!--Blog List Single Start-->
                            <div class="blog-list__single">
                                <div class="blog-list__img-box">
                                    <div class="blog-list__img">
                                        <img src="{{ asset('/assets/images/blog/blog-list-1-1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="blog-list__content">
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fal fa-calendar"></span>
                                            </div>
                                            <a href="{{ '#' }}">September 22, 2024</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="far fa-clock"></span>
                                            </div>
                                            <a href="{{ '#' }}">08 min read</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="far fa-tags"></span>
                                            </div>
                                            <a href="{{ '#' }}">Web Development</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-list__title"><a href="{{ route('blogDetails') }}">Maximizing Brand Through
                                            Creative Digital Solutions</a></h3>
                                    <p class="blog-list__text">They bring enthusiasm, skills, and time, which are
                                        crucial for driving the mission forward. Volunteers help in various capacities,
                                        from organizing events to directly assistin those in need, making them
                                        indispensable part of the charity ecosystem. Activities may include tutoring,
                                        mentoring,</p>
                                    <div class="blog-list__btn-box">
                                        <a href="{{ route('blogDetails') }}" class="thm-btn">Read More<span
                                                class="icon-arrow-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Blog List Single End-->
                            <!--Blog List Single Start-->
                            <div class="blog-list__single">
                                <div class="blog-list__img-box">
                                    <div class="blog-list__img">
                                        <img src="{{ asset('/assets/images/blog/blog-list-1-2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="blog-list__content">
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fal fa-calendar"></span>
                                            </div>
                                            <a href="{{ '#' }}">April 16, 2025</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="far fa-tags"></span>
                                            </div>
                                            <a href="{{ '#' }}">Education</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="far fa-comments"></span>
                                            </div>
                                            <a href="{{ '#' }}">Comments (03)</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-list__title"><a href="{{ route('blogDetails') }}">Creative Strategies to
                                            Elevate Your Business in 2025</a></h3>
                                    <p class="blog-list__text">They bring enthusiasm, skills, and time, which are
                                        crucial for driving the mission forward. Volunteers help in various capacities,
                                        from organizing events to directly assistin those in need, making them
                                        indispensable part of the charity ecosystem. Activities may include tutoring,
                                        mentoring,</p>
                                    <div class="blog-list__btn-box">
                                        <a href="{{ route('blogDetails') }}" class="thm-btn">Read More<span
                                                class="icon-arrow-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Blog List Single End-->
                            <!--Blog List Single Start-->
                            <div class="blog-list__single blog-list__single-3">
                                <div class="blog-list__content">
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fal fa-calendar"></span>
                                            </div>
                                            <a href="{{ '#' }}">April 16, 2025</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="far fa-tags"></span>
                                            </div>
                                            <a href="{{ '#' }}">Education</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="far fa-comments"></span>
                                            </div>
                                            <a href="{{ '#' }}">Comments (03)</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-list__title"><a href="{{ route('blogDetails') }}">Crafting Exceptional User
                                            Experiences Drive Results</a></h3>
                                    <p class="blog-list__text">They bring enthusiasm, skills, and time, which are
                                        crucial for driving the mission forward. Volunteers help in various capacities,
                                        from organizing events to directly assistin those in need, making them
                                        indispensable part of the charity ecosystem. Activities may include tutoring,
                                        mentoring,</p>
                                    <div class="blog-list__btn-box">
                                        <a href="{{ route('blogDetails') }}" class="thm-btn">Read More<span
                                                class="icon-arrow-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Blog List Single End-->
                            <!--Blog List Single Start-->
                            <div class="blog-list__single">
                                <div class="blog-list__img-box">
                                    <div class="blog-list__img">
                                        <img src="{{ asset('/assets/images/blog/blog-list-1-3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="blog-list__content">
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fal fa-calendar"></span>
                                            </div>
                                            <a href="{{ '#' }}">April 16, 2025</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="far fa-tags"></span>
                                            </div>
                                            <a href="{{ '#' }}">Education</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="far fa-comments"></span>
                                            </div>
                                            <a href="{{ '#' }}">Comments (03)</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-list__title"><a href="{{ route('blogDetails') }}">Innovative Marketing
                                            Tactics Boost Brand Engagement</a></h3>
                                    <p class="blog-list__text">They bring enthusiasm, skills, and time, which are
                                        crucial for driving the mission forward. Volunteers help in various capacities,
                                        from organizing events to directly assistin those in need, making them
                                        indispensable part of the charity ecosystem. Activities may include tutoring,
                                        mentoring,</p>
                                    <div class="blog-list__btn-box">
                                        <a href="{{ route('blogDetails') }}" class="thm-btn">Read More<span
                                                class="icon-arrow-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Blog List Single End-->
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
                    <!--Start Sidebar-->
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__search wow fadeInUp" data-wow-delay=".1s">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Enter Keyword">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!--End Sidebar Single-->


                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__category wow fadeInUp" data-wow-delay=".1s">
                                <h3 class="sidebar__title">Category</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="{{ '#' }}">Web Development <span class="icon-right-arrow"></span></a></li>
                                    <li><a href="{{ '#' }}">Digital Marketing <span class="icon-right-arrow"></span></a></li>
                                    <li><a href="{{ '#' }}">SEO Marketing <span class="icon-right-arrow"></span></a></li>
                                    <li><a href="{{ '#' }}">Search Engine Optimization <span
                                                class="icon-right-arrow"></span></a></li>
                                    <li><a href="{{ '#' }}">Growth Hacking <span class="icon-right-arrow"></span></a></li>
                                    <li><a href="{{ '#' }}">UI/UX Design <span class="icon-right-arrow"></span></a></li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__post wow fadeInUp" data-wow-delay=".1s">
                                <h3 class="sidebar__title">Latest posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('/assets/images/blog/blog-lp-1.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date">April 1, 2025</p>
                                            <h3 class="sidebar__post-title"><a href="{{ route('blogDetails') }}">Top Digital
                                                    Marketing Trends for 2025</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('/assets/images/blog/blog-lp-2.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date">May 05, 2025</p>
                                            <h3 class="sidebar__post-title"><a href="{{ route('blogDetails') }}">Why User
                                                    Experience Design Matters</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('/assets/images/blog/blog-lp-3.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date">July 15, 2025</p>
                                            <h3 class="sidebar__post-title"><a href="{{ route('blogDetails') }}">The Future of
                                                    Creative Advertising</a></h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__tags wow fadeInUp" data-wow-delay=".1s">
                                <h3 class="sidebar__title">Popular Tags</h3>
                                <ul class="sidebar__tags-list clearfix list-unstyled">
                                    <li><a href="{{ '#' }}">SEO Marketing</a></li>
                                    <li><a href="{{ '#' }}">Design</a></li>
                                    <li><a href="{{ '#' }}">Marketing</a></li>
                                    <li><a href="{{ '#' }}">Branding</a></li>
                                    <li><a href="{{ '#' }}">Development</a></li>
                                    <li><a href="{{ '#' }}">UI/UX</a></li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->

                        </div>
                    </div>
                    <!--End Sidebar-->
                </div>
            </div>
        </section>
        <!--Blog List End-->

            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
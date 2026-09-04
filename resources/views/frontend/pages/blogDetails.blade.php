@extends('frontend.layouts.app')
@section('title', 'Blog Details')
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
                    <h3>Blog Details</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img">
                                <img src="{{ asset('/assets/images/blog/blog-details-img-1.jpg') }}" alt="">
                            </div>
                            <div class="blog-details__content">
                                <ul class="blog-details__meta list-unstyled">
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
                                <h3 class="blog-details__title-1">The Art of Strategic Creativity</h3>
                                <p class="blog-details__text-1">Organic traffic growth is all about attracting more
                                    visitors to your website through unpaid search engine results. This is achieved
                                    primarily through a strategic approach to Search Engine Optimization (SEO). Here's a
                                    breakdown of key strategies to consider for organic traffic. We start with a
                                    comprehensive analysis of your business, industry, target audience, and current
                                    digital presence.</p>
                                <p class="blog-details__text-2">Through this process, we identify opportunities and
                                    tailor a strategy that aligns with your specific goals and budget. We can work with
                                    your existing website if it's technically sound and meets your needs. If necessary,
                                    we can also recommend.</p>
                                <div class="blog-details__img-box">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="blog-details__img-box-img">
                                                <img src="{{ asset('/assets/images/blog/blog-details-img-box-img-1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="blog-details__img-box-img">
                                                <img src="{{ asset('/assets/images/blog/blog-details-img-box-img-2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="blog-details__text-3">Whether you’re looking for advice on building a strong
                                    brand identity, improving your website’s user experience, or launching a successful
                                    digital marketing campaign, our blog covers it all. Our expert team provides
                                    actionable strategies, </p>
                                <h3 class="blog-details__title-2">Website Design and Development</h3>
                                <p class="blog-details__text-4">Whether you’re looking for advice on building a strong
                                    brand identity, improving your website’s user experience, or launching a successful
                                    digital marketing campaign, our blog covers it all. Our expert team provides
                                    actionable strategies, </p>
                                <div class="blog-details__author-text-box">
                                    <div class="blog-details__author-quote">
                                        <span class="icon-quote-2"></span>
                                    </div>
                                    <div class="blog-details__author-name">
                                        <span>Guy Hawkins</span>
                                    </div>
                                    <p class="blog-details__author-text">We also excel in packaging design, as seen in
                                        our collaboration with Delicious Delights. Our redesign of their product
                                        packaging focused boosting sales and customer feedback.</p>
                                </div>
                                <h3 class="blog-details__title-3">Building Wealth through Property Ownership</h3>
                                <p class="blog-details__text-5">Whether you’re looking for advice on building a strong
                                    brand identity, improving your website’s user experience, or launching a successful
                                    digital marketing campaign, our blog covers it all. Our expert team provides
                                    actionable strategies, </p>
                                <div class="blog-details__bottom-img">
                                    <img src="{{ asset('/assets/images/blog/blog-details-bottom-img.jpg') }}" alt="">
                                </div>
                                <p class="blog-details__text-6">Whether you’re looking for advice on building a strong
                                    brand identity, improving your website’s user experience, or launching a successful
                                    digital marketing campaign, our blog covers it all. Our expert team provides
                                    actionable strategies, </p>
                                <div class="blog-details__tag-and-share">
                                    <div class="blog-details__tag">
                                        <p class="blog-details__tag-title">Tags:</p>
                                        <div class="blog-details__tag-list">
                                            <a href="{{ '#' }}">Web Development</a>
                                            <a href="{{ '#' }}">Marketing</a>
                                            <a href="{{ '#' }}">Environment</a>
                                        </div>
                                    </div>
                                    <div class="blog-details__share-box">
                                        <p class="blog-details__share-title">Share:</p>
                                        <div class="blog-details__share">
                                            <a href="{{ '#' }}"><span class="icon-facebook"></span></a>
                                            <a href="{{ '#' }}"><span class="icon-twitter"></span></a>
                                            <a href="{{ '#' }}"><span class="icon-instagram"></span></a>
                                            <a href="{{ '#' }}"><span class="icon-linkin"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-one">
                                    <h3 class="comment-one__title">Comments (3)</h3>
                                    <div class="comment-one__single">
                                        <div class="comment-one__image">
                                            <img src="{{ asset('/assets/images/blog/comment-1-1.jpg') }}" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <h3>Mariya Dsuza</h3>
                                            <span>16 Aug, 2025 06:30pm</span>
                                            <p>Provide regular updates to donors and supporters through newsletters,
                                                social media, & the charity website, detailing how funds are being used
                                                and the impact achieved.</p>
                                            <div class="comment-one__btn-box">
                                                <a href="{{ route('blogDetails') }}" class="comment-one__btn"><span
                                                        class="icon-share"></span>reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-one__single comment-one__single-2">
                                        <div class="comment-one__image">
                                            <img src="{{ asset('/assets/images/blog/comment-1-2.jpg') }}" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <h3>Michel Phelops</h3>
                                            <span>16 Aug, 2025 06:30pm</span>
                                            <p>Use metrics and feedback to assess the success of projects and programs,
                                                and share these results with the community to demonstrate accountability
                                                and build trust.</p>
                                            <div class="comment-one__btn-box">
                                                <a href="{{ route('blogDetails') }}" class="comment-one__btn"><span
                                                        class="icon-share"></span>reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form">
                                    <h3 class="comment-form__title">Leave a Reply</h3>
                                    <form action="assets/inc/sendemail.php"
                                        class="comment-one__form contact-form-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Your Name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="email" placeholder="Email Address" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="comment-form__input-box text-message-box">
                                                    <textarea name="message" placeholder="Type Your Message"></textarea>
                                                </div>
                                                <div class="comment-form__btn-box">
                                                    <button type="submit"
                                                        class="footer-widget__newsletter-btn thm-btn">Submit Comment
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="result"></div>
                                    </form>
                                </div>
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
        <!--Blog Details End-->


            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
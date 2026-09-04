<header class="main-header-four">
    <nav class="main-menu main-menu-four">
        <div class="main-menu-four__wrapper">
            <div class="main-menu-four__wrapper-inner">
                <div class="main-menu-four__left">
                    <div class="main-menu-four__logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/resources/logo-3.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="main-menu-four__main-menu-box">
                    <a href="{{ '#' }}" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li class="dropdown megamenu">
                            <a href="{{ '#' }}">Home </a>
                            <ul>
                                <li>
                                    <section class="home-showcase">
                                        <div class="container">
                                            <div class="home-showcase__inner">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="home-showcase__item">
                                                            <div class="home-showcase__image">
                                                                <img src="{{ asset('/assets/images/home-showcase/home-showcase-1-1.jpg') }}"
                                                                    alt="">
                                                                <div class="home-showcase__buttons">
                                                                    <a href="{{ route('home') }}"
                                                                        class="thm-btn home-showcase__buttons__item">
                                                                        Multi Page
                                                                        <span class="fas fa-arrow-right"></span>
                                                                    </a>
                                                                    <a href="{{ route('home') }}"
                                                                        class="thm-btn home-showcase__buttons__item">
                                                                        One Page
                                                                        <span class="fas fa-arrow-right"></span>
                                                                    </a>
                                                                </div>
                                                                <!-- /.home-showcase__buttons -->
                                                            </div><!-- /.home-showcase__image -->
                                                            <h3 class="home-showcase__title">Home
                                                                Page
                                                                01</h3>
                                                            <!-- /.home-showcase__title -->
                                                        </div><!-- /.home-showcase__item -->
                                                    </div><!-- /.col-lg-3 -->
                                                    <div class="col-lg-4">
                                                        <div class="home-showcase__item">
                                                            <div class="home-showcase__image">
                                                                <img src="{{ asset('/assets/images/home-showcase/home-showcase-1-2.jpg') }}"
                                                                    alt="">
                                                                <div class="home-showcase__buttons">
                                                                    <a href="{{ route('indexTwo') }}"
                                                                        class="thm-btn home-showcase__buttons__item">
                                                                        Multi Page
                                                                        <span class="fas fa-arrow-right"></span>
                                                                    </a>
                                                                    <a href="{{ route('indexTwo') }}"
                                                                        class="thm-btn home-showcase__buttons__item">
                                                                        One Page
                                                                        <span class="fas fa-arrow-right"></span>
                                                                    </a>
                                                                </div>
                                                                <!-- /.home-showcase__buttons -->
                                                            </div><!-- /.home-showcase__image -->
                                                            <h3 class="home-showcase__title">Home
                                                                Page
                                                                02
                                                            </h3><!-- /.home-showcase__title -->
                                                        </div><!-- /.home-showcase__item -->
                                                    </div><!-- /.col-lg-3 -->
                                                    <div class="col-lg-4">
                                                        <div class="home-showcase__item">
                                                            <div class="home-showcase__image">
                                                                <img src="{{ asset('/assets/images/home-showcase/home-showcase-1-3.jpg') }}"
                                                                    alt="">
                                                                <div class="home-showcase__buttons">
                                                                    <a href="{{ route('indexThree') }}"
                                                                        class="thm-btn home-showcase__buttons__item">
                                                                        Multi Page
                                                                        <span class="fas fa-arrow-right"></span>
                                                                    </a>
                                                                    <a href="{{ route('indexThree') }}"
                                                                        class="thm-btn home-showcase__buttons__item">
                                                                        One Page
                                                                        <span class="fas fa-arrow-right"></span>
                                                                    </a>
                                                                </div>
                                                                <!-- /.home-showcase__buttons -->
                                                            </div><!-- /.home-showcase__image -->
                                                            <h3 class="home-showcase__title">Home
                                                                Page
                                                                03
                                                            </h3><!-- /.home-showcase__title -->
                                                        </div><!-- /.home-showcase__item -->
                                                    </div><!-- /.col-lg-3 -->
                                                </div><!-- /.row -->
                                            </div><!-- /.home-showcase__inner -->

                                        </div><!-- /.container -->
                                    </section>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">About</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ '#' }}">Pages</a>
                            <ul class="shadow-box">
                                <li><a href="{{ route('team') }}">Team</a></li>
                                <li><a href="{{ route('teamCarousel') }}">Team Carousel</a></li>
                                <li><a href="{{ route('teamDetails') }}">Team Details</a></li>
                                <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                <li><a href="{{ route('faq') }}">FAQs</a></li>
                                <li><a href="{{ route('404') }}">404 Error</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ '#' }}">services</a>
                            <ul class="shadow-box">
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('serviceCarousel') }}">Services Carousel</a></li>
                                <li><a href="{{ route('serviceDetails') }}">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ '#' }}">Portfolio</a>
                            <ul class="shadow-box">
                                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                <li><a href="{{ route('portfolioCarousel') }}">Portfolio Corousel</a></li>
                                <li><a href="{{ route('portfolioDetails') }}">Portfolio Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ '#' }}">Blog</a>
                            <ul class="shadow-box">
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('blogCarousel') }}">Blog Carousel</a></li>
                                <li><a href="{{ route('blogList') }}">Blog List</a></li>
                                <li><a href="{{ route('blogDetails') }}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="main-menu-four__right">
                    <div class="main-menu-four__search-box">
                        <a href="{{ '#' }}" class="main-menu-four__search searcher-toggler-box fal fa-search"></a>
                    </div>
                    <div class="main-menu-four__btn-box">
                        <a href="{{ route('contact') }}" class="thm-btn">Get A Quote
                            <span class="icon-arrow-up-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu main-menu-four">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
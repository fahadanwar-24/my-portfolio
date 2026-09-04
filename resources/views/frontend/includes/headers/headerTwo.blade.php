<header class="main-header-two">
            <nav class="main-menu main-menu-two">
                <div class="main-menu-two__wrapper">
                    <div class="main-menu-two__wrapper-inner">
                        <div class="main-menu-two__left">
                            <div class="main-menu-two__logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/resources/logo-2.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu-two__main-menu-box">
                            <a href="{{ '#' }}" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            @include('frontend.includes.partials.navbar')
                        </div>
                        <div class="main-menu-two__right">
                            <div class="main-menu-two__search-box">
                                <a href="{{ '#' }}" class="main-menu-two__search searcher-toggler-box fal fa-search"></a>
                            </div>
                            <div class="main-menu-two__btn-box">
                                <a href="{{ route('contact') }}" class="thm-btn">Get A Quote
                                    <span class="icon-arrow-up-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
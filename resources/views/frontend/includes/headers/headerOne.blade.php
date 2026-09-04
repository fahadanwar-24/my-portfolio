<header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/resources/logo-1.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="{{ '#' }}" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            @include('frontend.includes.partials.navbar')
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__search-box">
                                <a href="{{ '#' }}" class="main-menu__search searcher-toggler-box fal fa-search"></a>
                            </div>
                            <div class="main-menu__btn-box">
                                <a href="{{ route('contact') }}" class="thm-btn">Get A Quote
                                    <span class="icon-arrow-up-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
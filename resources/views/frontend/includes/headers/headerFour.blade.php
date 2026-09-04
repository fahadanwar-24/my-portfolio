<header class="main-header-four">
    <nav class="main-menu main-menu-four">
        <div class="main-menu-four__wrapper">
            <div class="main-menu-four__wrapper-inner">
                <div class="main-menu-four__left">
                    <div class="main-menu-four__logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/resources/logo-5.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="main-menu-four__main-menu-box">
                    <a href="{{ '#' }}" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    @include('frontend.includes.partials.navbar')
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
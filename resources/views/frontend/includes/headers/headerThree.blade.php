<header class="main-header-three">
            <nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="main-menu-three__wrapper-inner">
                        <div class="main-menu-three__left">
                            <div class="main-menu-three__logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/resources/logo-3.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu-three__middle-content">
                            <div class="main-menu-three__contact-and-social-box">
                                <div class="main-menu-three__contact-box">
                                    <p>Contact</p>
                                    <div class="main-menu-three__contact-border-box"></div>
                                    <a href="{{ 'mailto:Support@nexin.com' }}">Support@nexin.com</a>
                                </div>
                                <div class="main-menu-three__social-box">
                                    <a href="{{ '#' }}"><span class="icon-facebook"></span></a>
                                    <a href="{{ '#' }}"><span class="icon-twitter"></span></a>
                                    <a href="{{ '#' }}"><span class="icon-instagram"></span></a>
                                    <a href="{{ '#' }}"><span class="icon-beeeee"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu-three__right">
                            <div class="main-menu-three__main-menu-box">
                                <a href="{{ '#' }}" class="mobile-nav__toggler">Menu<i class="fa fa-bars"></i></a>
                                @include('frontend.includes.partials.navbar')
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
@extends('frontend.layouts.app')
@section('title', '404 Error')
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
                    <h3>404 Error</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>404 Error</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Start Error Page-->
        <section class="error-page">
            <div class="container">
                <div class="error-page__inner text-center">
                    <div class="error-page__img">
                        <img src="{{ asset('/assets/images/resources/error-page-img1.png') }}" alt="">
                    </div>

                    <div class="error-page__content">
                        <h2 class="error-page__title">Opp’s that page can’t be found</h2>
                        <p class="error-page__text">It looks like nothing was found at this location. Maybe try one
                            of<br>
                            the links below or a search?</p>
                        <div class="error-page__btn-box">
                            <a href="{{ route('home') }}" class="thm-btn"><span class="fas fa-home"></span>Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Error Page-->

            
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
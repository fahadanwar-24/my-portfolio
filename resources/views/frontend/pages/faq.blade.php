@extends('frontend.layouts.app')
@section('title', 'Our Faq)
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
                    <h3>FAQS</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>FAQS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Faq Page Start -->
        <section class="faq-page">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">FAQ</span>
                    </div>
                    <h2 class="section-title__title title-animation">Frequency & Questions
                    </h2>
                </div>
                <div class="faq-one__inner">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <div class="accrodion active wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>What services does your digital agency offer?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Meeting project deadlines is a top priority. We understand the importance of
                                        timely delivery and have established a comprehensive approach to ensure that all
                                        projects are completed on schedule without compromising quality.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>How long does it take to complete a project?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Meeting project deadlines is a top priority. We understand the importance of
                                        timely delivery and have established a comprehensive approach to ensure that all
                                        projects are completed on schedule without compromising quality.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>Do you offer ongoing support and maintenance?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Meeting project deadlines is a top priority. We understand the importance of
                                        timely delivery and have established a comprehensive approach to ensure that all
                                        projects are completed on schedule without compromising quality.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>Will my website be mobile-friendly and SEO optimized?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Meeting project deadlines is a top priority. We understand the importance of
                                        timely delivery and have established a comprehensive approach to ensure that all
                                        projects are completed on schedule without compromising quality.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="accrodion-title">
                                <h4>What is your pricing model?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Meeting project deadlines is a top priority. We understand the importance of
                                        timely delivery and have established a comprehensive approach to ensure that all
                                        projects are completed on schedule without compromising quality.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Faq One End -->
        

     <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
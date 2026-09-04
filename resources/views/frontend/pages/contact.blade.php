@extends('frontend.layouts.app')
@section('title', 'Contact Us')
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
                    <h3>Contact Us</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>/</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="contact-page__top">
                    <h3 class="contact-page__top-title">Our Contact Information</h3>
                    <div class="contact-page__contact-list">
                        <div class="row">
                            <!--Contact Page Contact Single Start-->
                            <div class="col-xl-4 col-lg-4">
                                <div class="contact-page__contact-single">
                                    <div class="contact-page__icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="contact-page__contact-content">
                                        <h3>Our Address</h3>
                                        <p>374 William S Canning Blvd, Fall<br> River MA 2721, USA</p>
                                    </div>
                                </div>
                            </div>
                            <!--Contact Page Contact Single End-->
                            <!--Contact Page Contact Single Start-->
                            <div class="col-xl-4 col-lg-4">
                                <div class="contact-page__contact-single">
                                    <div class="contact-page__icon">
                                        <span class="icon-call-2"></span>
                                    </div>
                                    <div class="contact-page__contact-content">
                                        <h3>Contact Number</h3>
                                        <p>Mobile: <a href="{{ 'tel:13217322978' }}">+13217322978</a></p>
                                        <p>Email: <a href="{{ 'mailto:saorhelp@gmail.com' }}">saorhelp@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <!--Contact Page Contact Single End-->
                            <!--Contact Page Contact Single Start-->
                            <div class="col-xl-4 col-lg-4">
                                <div class="contact-page__contact-single">
                                    <div class="contact-page__icon">
                                        <span class="icon-clock"></span>
                                    </div>
                                    <div class="contact-page__contact-content">
                                        <h3>Opening Hour</h3>
                                        <p>Monday - Saturday: 9:00 - 18:00
                                            <br>Sunday: Closed</p>
                                    </div>
                                </div>
                            </div>
                            <!--Contact Page Contact Single End-->
                        </div>
                    </div>
                </div>
                <div class="contact-page__bottom">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__bottom-left">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                    class="google-map__one" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__bottom-right">
                                <h3 class="contact-page__form-title">Get In Touch</h3>
                                <form class="contact-form-validated contact-page__form"
                                    action="assets/inc/sendemail.php" method="POST">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" name="name" placeholder="Your Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box">
                                                <input type="email" name="email" placeholder="Email Address"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Phone" name="Phone Number" required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box text-message-box">
                                                <textarea name="message" placeholder="Type Your Message"
                                                    required=""></textarea>
                                            </div>
                                            <div class="contact-page__btn-box">
                                                <button type="submit" class="footer-widget__newsletter-btn thm-btn">Send
                                                    A Message</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->
           
            <!-- footer area -->
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection
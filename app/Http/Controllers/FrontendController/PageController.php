<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function notFound() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.404', compact('bodyClass'));
    }

    public function about() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.about', compact('bodyClass'));
    }


    public function blog() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.blog', compact('bodyClass'));
    }

    public function blogDetails() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.blogDetails', compact('bodyClass'));
    }

    public function blogCarousel() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.blogCarousel', compact('bodyClass'));
    }

    public function blogList() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.blogList', compact('bodyClass'));
    }

    public function contact() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.contact', compact('bodyClass'));
    }

    public function faq() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.faq', compact('bodyClass'));
    }

    public function portfolio() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.portfolio', compact('bodyClass'));
    }

    public function portfolioCarousel() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.portfolioCarousel', compact('bodyClass'));
    }

    public function portfolioDetails() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.portfolioDetails', compact('bodyClass'));
    }

    public function pricing() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.pricing', compact('bodyClass'));
    }

    public function services() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.services', compact('bodyClass'));
    }

    public function serviceDetails() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.serviceDetails', compact('bodyClass'));
    }

    public function serviceCarousel() {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.serviceCarousel', compact('bodyClass'));
    }

    public function team () {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.team', compact('bodyClass'));
    }

    public function teamDetails () {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.teamDetails', compact('bodyClass'));
    }

    public function teamCarousel () {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.teamCarousel', compact('bodyClass'));
    }

    public function testimonials () {
        $bodyClass = 'page-wrapper custom-cursor';
        return view('frontend.pages.testimonials', compact('bodyClass'));
    }

   

}

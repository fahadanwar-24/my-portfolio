<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomeController;
use App\Http\Controllers\FrontendController\PageController;

/**
 *    Frontend
 */

// All Index Pages Routing
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'indexOne')->name('home'); // index
    Route::get('index2', 'indexTwo')->name('indexTwo');
    Route::get('index3', 'indexThree')->name('indexThree');

});

// Other Pages Routing
Route::controller(PageController::class)->group(function () {
    Route::get('404', 'notFound')->name('404');
    Route::get('about', 'about')->name('about');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog-details', 'blogDetails')->name('blogDetails');
    Route::get('blog-carousel', 'blogCarousel')->name('blogCarousel');
    Route::get('blog-list', 'blogList')->name('blogList');
    Route::get('contact', 'contact')->name('contact');
    Route::get('faq', 'faq')->name('faq');
    Route::get('portfolio', 'portfolio')->name('portfolio');
    Route::get('portfolio-carousel', 'portfolioCarousel')->name('portfolioCarousel');
    Route::get('portfolio-details', 'portfolioDetails')->name('portfolioDetails');
    Route::get('pricing', 'pricing')->name('pricing');
    Route::get('services', 'services')->name('services');
    Route::get('services-carousel', 'serviceCarousel')->name('serviceCarousel');
    Route::get('service-details', 'serviceDetails')->name('serviceDetails');
    Route::get('team', 'team')->name('team');
    Route::get('team-details', 'teamDetails')->name('teamDetails');
    Route::get('team-carousel', 'teamCarousel')->name('teamCarousel');
    Route::get('testimonials', 'testimonials')->name('testimonials');
    
});

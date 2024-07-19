<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.index');
});
Route::get('/about-us', function () {
    return view('guest.about');
});
Route::get('/testing', function () {
    return view('guest.testing');
});


Route::prefix('blog')->group(function () {
    route::get('/the-future-of-web-development-trends-and-innovations',function (){
        return view('guest.blogs.blog1');
    })->name('blog1');
    route::get('/transforming-business-with-automation-Key-Benefits-and-Strategies',function (){
        return view('guest.blogs.blog2');
    })->name('blog2');
});

Route::get('/services', function () {
    return view('guest.service');
});
Route::get('/faq', function () {
    return view('guest.faq');
});

Route::get('/projects', function () {
    return view('guest.projects');
});

Route::get('/open-source-contribution', function () {
    return view('guest.osc');
});

Route::get('/layout', function () {
    return view('layout.app');
});
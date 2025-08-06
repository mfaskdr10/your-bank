<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage.homepage');
})->name('home');

Route::get('/careers', function () {
    return view('pages.careerspage.careerspage');
})->name('careers');

Route::get('/about', function () {
    return view('pages.aboutpage.aboutpage');
})->name('about');

Route::get('/security', function () {
    return view('pages.securitypage.securitypage');
})->name('security');

Route::get('/signup', function () {
    return view('pages.securitypage.securitypage');
})->name('security');

Route::get('/login', function () {
    return view('pages.securitypage.securitypage');
})->name('security');

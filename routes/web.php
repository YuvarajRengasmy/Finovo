<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/bloglist', function () {
    return view('bloglist');
});
Route::get('/blogdetails', function () {
    return view('blogdetails');
});
Route::get('/eventlist', function () {
    return view('eventlist');
});
Route::get('/uk_study', function () {
    return view('study.uk');
});

Route::get('/usa_study', function () {
    return view('study.usa');
});
Route::get('/canada_study', function () {
    return view('study.canada');
});
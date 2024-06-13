<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/featured', function () {
    return view('featured');
});
Route::get('/recent', function () {
    return view('recent');
});
Route::get('/presentation', function () {
    return view('presentation');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});

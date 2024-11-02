<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard/home');
});
Route::get('/about', function () {
    return view('dashboard/about',['nama' => 'Ji']);
});
Route::get('/blog', function () {
    return view('dashboard/blog');
});
Route::get('/booking', function () {
    return view('dashboard/booking');
});
Route::get('/contact', function () {
    return view('dashboard/contact');
});
Route::get('/indexbooking', function () {
    return view('dashboard/indexbooking');
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home' , ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['title' =>'about']);
});
Route::get('/blog', function () {
    return view('blog' , ['title' => 'Welcom To My Blog' ]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
Route::get('show', function () {
    return view('show');
});
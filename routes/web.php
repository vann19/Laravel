<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get(uri: '/about', action: function () {
    return view('about',['name' => 'Laravel']);
});

Route::get(uri: '/blog', action: function () {
    return view('blog');
});

Route::get(uri: '/contact', action: function () {
    return view('contact');
});


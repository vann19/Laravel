<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get(uri: '/about', action: function () {
    return view('about',['name' => 'Fansya', 'title' => 'About']);
});

Route::get(uri: '/blog', action: function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get(uri: '/contact', action: function () {
    return view('contact', ['title' => 'Contact']);
});


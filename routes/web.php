<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get(uri: '/about', action: function () {
    return view('about',['name' => 'Laravel']);
});


<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get(uri: '/about', action: function () {
    return view('about',['name' => 'Fansya', 'title' => 'About']);
});

Route::get(uri: '/posts', action: function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post ) {

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get(uri: '/contact', action: function () {
    return view('contact', ['title' => 'Contact']);
});


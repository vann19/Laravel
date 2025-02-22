<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get(uri: '/about', action: function () {
    return view('about',['name' => 'Fansya', 'title' => 'About']);
});

Route::get(uri: '/posts', action: function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Fansyaode',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae aspernatur totam alias iusto, nihil molestias rerum incidunt, corrupti soluta illo, praesentium quas iure quasi modi commodi fuga? Nulla, expedita nihil.
             Doloribus iusto sunt, ut dicta corporis esse minus amet iste suscipit odit deserunt sint aut, error alias enim magni ea nemo. Corporis voluptate similique quos itaque vitae ut atque enim.
             Sequi laborum earum reprehenderit doloribus sit dolores a voluptas blanditiis ipsum doloremque numquam labore illo officiis, recusandae ipsa, maxime voluptates atque veniam exercitationem! Hic voluptatem vel temporibus repellendus. Tempore, error?'

        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Agus Buntung',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae aspernatur totam alias iusto, nihil molestias rerum incidunt, corrupti soluta illo, praesentium quas iure quasi modi commodi fuga? Nulla, expedita nihil.
             Doloribus iusto sunt, ut dicta corporis esse minus amet iste suscipit odit deserunt sint aut, error alias enim magni ea nemo. Corporis voluptate similique quos itaque vitae ut atque enim.
             Sequi laborum earum reprehenderit doloribus sit dolores a voluptas blanditiis ipsum doloremque numquam labore illo officiis, recusandae ipsa, maxime voluptates atque veniam exercitationem! Hic voluptatem vel temporibus repellendus. Tempore, error?'

        ],
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Fansyaode',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae aspernatur totam alias iusto, nihil molestias rerum incidunt, corrupti soluta illo, praesentium quas iure quasi modi commodi fuga? Nulla, expedita nihil.
             Doloribus iusto sunt, ut dicta corporis esse minus amet iste suscipit odit deserunt sint aut, error alias enim magni ea nemo. Corporis voluptate similique quos itaque vitae ut atque enim.
             Sequi laborum earum reprehenderit doloribus sit dolores a voluptas blanditiis ipsum doloremque numquam labore illo officiis, recusandae ipsa, maxime voluptates atque veniam exercitationem! Hic voluptatem vel temporibus repellendus. Tempore, error?'

        ],
        [   
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Agus Buntung',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae aspernatur totam alias iusto, nihil molestias rerum incidunt, corrupti soluta illo, praesentium quas iure quasi modi commodi fuga? Nulla, expedita nihil.
             Doloribus iusto sunt, ut dicta corporis esse minus amet iste suscipit odit deserunt sint aut, error alias enim magni ea nemo. Corporis voluptate similique quos itaque vitae ut atque enim.
             Sequi laborum earum reprehenderit doloribus sit dolores a voluptas blanditiis ipsum doloremque numquam labore illo officiis, recusandae ipsa, maxime voluptates atque veniam exercitationem! Hic voluptatem vel temporibus repellendus. Tempore, error?'

        ],
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get(uri: '/contact', action: function () {
    return view('contact', ['title' => 'Contact']);
});


<?php 

namespace App\Models;

use Illuminate\Support\Arr;
use PhpParser\Node\Stmt\Static_;

class Post
{
    public static function all()
    {
        return[
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
    }


    // Teknik fungsi callback
    public static function find($slug):array
    {
        // Teknik arrow function
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }
        return $post;
    }
}
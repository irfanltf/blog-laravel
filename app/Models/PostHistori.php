<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{

    private static $blog_post = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Muhammad Irfan Lutfi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam rem quis dicta incidunt? Itaque illo neque fugit voluptate animi blanditiis, quod nesciunt consequuntur sequi ab, corrupti magnam. Harum, esse veritatis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam rem quis dicta incidunt? Itaque illo neque fugit voluptate animi blanditiis, quod nesciunt consequuntur sequi ab, corrupti magnam. Harum, esse veritatis.'
        ],
        [
            'title' => 'Judul Post Irfan',
            'slug' => 'judul-post-kedua',
            'author' => 'Muhammad Irfan Lutfi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam rem quis dicta incidunt? Itaque illo neque fugit voluptate animi blanditiis, quod nesciunt consequuntur sequi ab, corrupti magnam. Harum, esse veritatis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam rem quis dicta incidunt? Itaque illo neque fugit voluptate animi blanditiis, quod nesciunt consequuntur sequi ab, corrupti magnam. Harum, esse veritatis. corrupti magnam. Harum, esse veritatis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam rem quis dicta incidunt? Itaque illo neque fugit voluptate animi blanditiis, quod nesciunt consequuntur sequi ab, corrupti magnam. Harum, esse veritatis.'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}

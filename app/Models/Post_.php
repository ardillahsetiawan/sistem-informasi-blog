<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ardillah Setiawan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, quam doloremque. Nulla nesciunt, quo officiis possimus pariatur et reprehenderit quisquam iure labore corporis. Ab, quas iure dolorem perferendis quia esse."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Abraham",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, quam doloremque. Nulla nesciunt, quo officiis possimus pariatur et reprehenderit quisquam iure labore corporis. Ab, quas iure dolorem perferendis quia esse."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}

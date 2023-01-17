<?php

namespace App\Models;

class Post
{
    private static $blog_posts =  [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Amelia Venesa",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit.  Nobis, saepe. Hic ad ipsa repudiandae, error deserunt praesentium optio sint.  Ipsum at ea excepturi quo nihil ipsa voluptas velit sit laboriosam, quia, nesciunt dolorem saepe amet dolorum pariatur facilis accusamus reiciendis in. Eum alias obcaecati quis vero consequatur harum, et aliquid eligendi rerum, necessitatibus sunt nam velit accusamus ad tempore laborum. Voluptas possimus error officiis, cum illum veritatis minus! Impedit quo mollitia cum porro. Nulla hic quis eaque, omnis soluta possimus eveniet quae exercitationem optio itaque porro dolorum iure numquam dignissimos!"
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Amara Nibiru",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, saepe. Hic ad ipsa repudiandae, error deserunt praesentium optio sint.  Ipsum at ea excepturi quo nihil ipsa voluptas velit sit laboriosam, quia, nesciunt dolorem saepe amet dolorum pariatur facilis accusamus reiciendis in. Eum alias obcaecati quis vero consequatur harum, et aliquid eligendi rerum, necessitatibus sunt nam velit accusamus ad tempore laborum. Voluptas possimus error officiis, cum illum veritatis minus! Impedit quo mollitia cum porro. Nulla hic quis eaque, omnis soluta possimus eveniet quae exercitationem optio itaque porro dolorum iure numquam dignissimos!"
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post->firstwhere('slug', $slug);
    }
}

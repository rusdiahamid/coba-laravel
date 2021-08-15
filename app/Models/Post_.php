<?php

namespace App\Models;


class Post
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rusdia Hamid",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente mollitia ullam, aspernatur, veniam aut eligendi culpa assumenda nam hic dolores excepturi iste dolore perspiciatis beatae tempore id earum minus tenetur incidunt ut doloremque magnam, dicta perferendis? Cumque ad nisi quas iste at! Suscipit consequuntur saepe quia itaque culpa sit, sunt molestias nobis veniam. Cum libero provident rerum, exercitationem illum recusandae rem officia, fuga minima, delectus quidem nesciunt iusto dolor incidunt. Porro, ea. Accusamus non molestiae nihil repellat. Facere, tenetur harum!. "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Musyaffa Sakhi Athallah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus beatae accusamus corporis nostrum facere sint culpa adipisci asperiores harum! Aperiam et deserunt enim officiis, doloribus itaque doloremque, recusandae quae veniam facilis aliquid vero debitis quaerat nesciunt mollitia neque ipsa. Consectetur dolores aliquam obcaecati natus iure temporibus amet porro quia earum, unde, quae enim at corporis tenetur magni harum eaque eius deleniti aliquid fugiat repellat consequuntur consequatur. Iure corrupti esse id, minima quibusdam deserunt officiis eligendi doloremque quam excepturi ex, laborum quasi repellendus incidunt nesciunt unde iste? Modi quo eveniet sed repellat ad excepturi ullam veritatis quod laborum repellendus. Eos, soluta."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}

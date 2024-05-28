<?php

namespace App\Models;

use Illuminate\Support\Arr;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;

class Post {
    public static function all()
    {
    return [
        [
            'id'=> 1,
            'title' => 'Judul artikel 1',
            'author' => 'Bintang Prakoso',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit omnis ipsum illo dolores commodi voluptas suscipit nulla quam itaque error earum reiciendis sapiente voluptatibus, id cumque. Non incidunt tempora distinctio.'
        ],
        [
            'id'=> 2,
            'title' => 'Judul artikel 2',
            'author' => 'Bintang Prakoso',
            'body' => 'Bintang, ipsum doloooor sit amet consectetur adipisicing elit. Sit omnis ipsum illo dolores commodi voluptas suscipit nulla quam itaque error earum reiciendis sapiente voluptatibus, id cumque. Non incidunt tempora distinctio.'
        ]

        ];
}

public static function find($id) 
{ 
    $post = Arr::first(static::all(), fn($post) => $post['id'] == $id);

    if(! $post) {
        abort(404);
    }

    Return $post;
}
}
<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home',['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about',['nama' => 'Bintang Prakoso', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts',['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{id}', function ($id) {
    

        $post = Post::find($id);

        return view ('post', ['title' => 'Single Post', 'post' => $post]);
});
    

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});
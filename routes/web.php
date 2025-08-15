<?php

use App\Models\Posts;
use App\Http\Controllers\MenuControler;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Pasha', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Post', 'posts'=> Posts::all()]);
});

Route::get('/posts/{posts:slug}', function(Posts $posts) {
    // $post = Posts::find($id);
    return view('post', ['title' => 'Single Post', 'post' => $posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/menu', [MenuControler::class, 'index']);
<?php

use App\Models\User;
use App\Models\Posts;
use App\Models\Category;
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
    return view('posts', ['title' => 'Post', 'posts'=> Posts::filter(request(['search', 'category', 'author']))->latest()->get()]);
});

Route::get('/posts/{posts:slug}', function(Posts $posts) {
    return view('post', ['title' => 'Single Post', 'post' => $posts]);
});

Route::get('/author/{user:username}', function(User $user) {
    return view('posts', ['title' => count($user->posts) . ' Arcticles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    // $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => 'Category in : ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/menu', [MenuControler::class, 'index']);
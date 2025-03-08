<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => post::all()]);
});

Route::get('/posts/{post:slug}', function(post $post) {
    return view('post', ['title' => $post['title'], 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {

    return view('posts', ['title' => count($user->posts) . ' Articles By ' . $user -> name, 'posts' => $user -> posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => count($category->posts) . ' Articles in ' . $category -> name, 'posts' => $category -> posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
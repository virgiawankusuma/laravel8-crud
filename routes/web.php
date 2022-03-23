<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'description' => 'This is the home page',
        'keywords' => 'home, page',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'description' => 'This is the about page',
        'keywords' => 'about, page',
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Blog post 1',
            'slug' => 'blog-post-1',
            'description' => 'This is the first blog post',
            'keywords' => 'blog, post, 1',
            'author' => 'John Doe',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facil'
        ],
        [
            'title' => 'Blog post 2',
            'slug' => 'blog-post-2',
            'description' => 'This is the second blog post',
            'keywords' => 'blog, post, 2',
            'author' => 'John Doe',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facil'
        ],
    ];

    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

// single page
Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            'title' => 'Blog post 1',
            'slug' => 'blog-post-1',
            'description' => 'This is the first blog post',
            'keywords' => 'blog, post, 1',
            'author' => 'John Doe',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facil'
        ],
        [
            'title' => 'Blog post 2',
            'slug' => 'blog-post-2',
            'description' => 'This is the second blog post',
            'keywords' => 'blog, post, 2',
            'author' => 'John Doe',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facilisi. Donec euismod, nisl eget consectetur tempor, nisi nunc aliquet nunc, eget tincidunt nunc nisi eu nisl. Nulla facil'
        ],
    ];

    $new_blog_posts = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] == $slug) {
            $new_blog_posts = $post;
        }
    }
    return view('post', [
        'title' => 'Post',
        'post' => $new_blog_posts
    ]);
});

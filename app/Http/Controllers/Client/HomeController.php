<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {

        $postSlides = Post::orderBy('created_at', 'desc')->limit(7)->get();

        $postHot = Post::select(
                'posts.id',
                'posts.title',
                'posts.slug',
                'posts.image',
                'posts.excerpt',
                'posts.created_at',
                'posts.category_id',
                'categories.id',
                'categories.category_name'
        )
            ->orderBy('created_at', 'desc')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id');

        return view('Client.home', compact('postSlides', 'postHot'));
    }
}

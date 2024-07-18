<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postDetail($slug)
    {

        $postDetail = Post::select(
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
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->where('posts.slug', $slug)->first();

        return view('Client.blog-post-detail', compact('postDetail'));
    }

    public function postByCategory($slug)
    {
        $category = Categories::where('slug', $slug)->firstOrFail();

        $postByCategory = Post::select(
            'posts.id',
            'posts.title',
            'posts.slug',
            'posts.image',
            'posts.excerpt',
            'posts.created_at',
            'posts.category_id',
            'categories.id as category_id',
            'categories.category_name',
            'categories.slug as category_slug'
        )
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->where('categories.slug', $slug)
            ->get();

        return view('Client.blog-post-by-category', compact('postByCategory', 'category'));
    }

    public function search(Request $request)
    {

        $keyword = $request->input('keyword');

        $resultSearch = Post::select(
            'posts.id',
            'posts.title',
            'posts.slug',
            'posts.image',
            'posts.excerpt',
            'posts.created_at',
            'posts.category_id',
            'categories.id as category_id',
            'categories.category_name',
            'categories.slug as category_slug'
        )
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->where('posts.title', 'like', '%' . $keyword . '%')
            ->get();

        return view('Client.blog-post-search', compact('resultSearch', 'keyword'));
    }

}

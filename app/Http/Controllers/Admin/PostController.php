<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Categories;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index()
    {
        $dataList = Post::select(
            'posts.id',
            'posts.title',
            'posts.image',
            'posts.excerpt',
            'posts.content',
            'posts.view',
            'posts.created_at',
            'posts.category_id',
            'categories.id as category_id',
            'categories.category_name as category_name'
        )->orderBy('posts.id', 'desc')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->get();
        return view('Admin.posts.list', compact('dataList'));
    }

    public function create()
    {
        $dataDanhMuc = Categories::with('childrenRecursive')->whereNull('parent_id')->get();

        return view('Admin.posts.create', compact('dataDanhMuc'));
    }

    public function store(PostRequest $request)
    {
        try {
            $validatedData = $request->validated();

            $post = new Post;

            $post->title = $validatedData['title'];
            $post->excerpt = $validatedData['excerpt'];
            $post->content = $validatedData['content'];
            $post->category_id = $validatedData['category_id'];
            $post->slug = $validatedData['slug'];

            if ($request->hasFile('image')) {
                $path = $request->file('image')->storePublicly('public/posts');
                $post->image = Storage::url($path);
            }

            $post->save();

            return response()->json([
                'store' => true,
                'message' => 'Bạn vừa thêm 1 bài viết thành công'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'store' => false,
                'message' => 'Lỗi khi thêm bài viết' . $e->getMessage()
            ]);
        }
    }

    public function detail($id)
    {
        $postById = Post::select(
            'posts.id',
            'posts.title',
            'posts.slug',
            'posts.image',
            'posts.excerpt',
            'posts.content',
            'posts.view',
            'posts.created_at',
            'posts.category_id',
            'categories.id as category_id',
            'categories.category_name as category_name'
        )->orderBy('posts.id', 'desc')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->where('posts.id', $id)
            ->first();

        return view('Admin.posts.detail', compact( 'postById'));
    }

    public function edit($id)
    {
        $dataDanhMuc = Categories::with('childrenRecursive')->whereNull('parent_id')->get();

        $postById = Post::select(
            'posts.id',
            'posts.title',
            'posts.slug',
            'posts.image',
            'posts.excerpt',
            'posts.content',
            'posts.view',
            'posts.created_at',
            'posts.category_id',
            'categories.id as category_id',
            'categories.category_name as category_name'
        )->orderBy('posts.id', 'desc')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->where('posts.id', $id)
            ->first();

        return view('Admin.posts.edit', compact('dataDanhMuc', 'postById'));
    }

    public function update(PostRequest $request, $id)
    {
        try {
            $validatedData = $request->validated();

            $post = Post::find($id);

            if (!$post) {
                return response()->json([
                    'update' => false,
                    'message' => 'Bài viết này không tìm thấy!'
                ]);
            }

            $post->title = $validatedData['title'];
            $post->excerpt = $validatedData['excerpt'];
            $post->content = $validatedData['content'];
            $post->category_id = $validatedData['category_id'];
            $post->slug = $validatedData['slug'];

            if ($request->hasFile('image')) {
                if ($post->image) {
                    $imagePath = 'public/posts/' . basename($post->image);
                    if (Storage::exists($imagePath)) {
                        Storage::delete($imagePath);
                    }
                }

                $path = $request->file('image')->storePublicly('public/posts');
                $post->image = Storage::url($path);
            }

            $post->save();

            return response()->json([
                'update' => true,
                'message' => 'Cập nhật bài viết thành công'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'update' => false,
                'message' => 'Lỗi khi sửa bài viết: ' . $e->getMessage()
            ]);
        }
    }

    public function delete($id)
    {
        try {
            $post = Post::find($id);

            if (!$post) {
                return response()->json([
                    'delete' => false,
                    'message' => 'Bài viết này không tìm thấy!'
                ]);
            }

            if ($post->image) {
                $imagePath = 'public/posts/' . basename($post->image);
                if (Storage::exists($imagePath)) {
                    Storage::delete($imagePath);
                }
            }

            $post->delete();

            return response()->json([
                'delete' => true,
                'message' => 'Xóa bài viết thành công'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'delete' => false,
                'message' => 'Đã xảy ra lỗi khi xóa bài viết.'
            ]);
        }
    }
}

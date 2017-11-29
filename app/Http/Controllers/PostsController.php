<?php

namespace Blog\Http\Controllers;

use Blog\Http\Requests\StoreBlogPost;
use Blog\Post;
use Carbon\Carbon;
use Request;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    //
    public function index()
    {

        $blogPosts = Post::with('user')->latest()->simplePaginate(3);
        //return view('posts.index', compact('blogPosts'));
        return view('posts.index', compact('blogPosts', 'archives'));

    }

    public function archives($month,$year)
    {
        $blogPosts = Post::archives($month,$year)->latest()->simplePaginate(5);
        $blogPosts->load('user');

        return view('posts.index', compact('blogPosts'));
    }

    public function show(Post $post)
    {
        $post->load('user', 'comments.user');
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.post-edit',compact('post'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $inputs = Request::all();
        $post->update($inputs);
        return redirect('posts/'.$post->id);
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store(StoreBlogPost $request)
    {
        $post = Post::create(request()->all());
        return redirect('posts/' . $post->id);
    }

}

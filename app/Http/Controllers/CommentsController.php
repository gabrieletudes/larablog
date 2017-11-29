<?php

namespace Blog\Http\Controllers;

use Blog\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store()
    {
       request()->validate([
            'content'=>'required|min:10|max:1000',
            'post_id'=>'required|numeric'
        ]);
        Comment::create(request()->all());
        return redirect('posts/'.request('post_id'));
    }
}

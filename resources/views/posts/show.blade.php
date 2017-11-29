@extends('layouts.main')
@section('maincontent')
<div class="blog-post">
    <h2 class="blog-post-title">{{$post->title}}</h2>
    <p class="blog-post-meta">{{$post->created_at->format('F j, Y')}} by <a href="#">{{$post->user->name}}</a></p>
    <p>{{$post->preamble}}</p>
    <hr>
    <p>{{$post->body}}</p>
    <a href="/posts/edit/{{$post->id}}" class="btn btn-outline-danger">Edit</a>
</div><!-- /.blog-post -->
@include('partials.comment')
@include('partials.commentform')
<nav class="blog-pagination">
        <a class="btn btn-outline-secondary disabled" href="#">Older</a>
        <a class="btn btn-outline-primary" href="#">Newer</a>
</nav>
@endsection
@extends('layouts.main')
@section('maincontent')
    @foreach($blogPosts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
            <p class="blog-post-meta">{{$post->created_at->format('F j, Y')}} by <a href="#">{{$post->user->name}}</a>
            </p>
            @if($post->preamble)
                <p>{{$post->preamble}}</p>
                <hr>
            @endif
            <p>{{$post->body}}</p>
        </div><!-- /.blog-post -->
    @endforeach
    @include('partials.pagination-single')
@endsection
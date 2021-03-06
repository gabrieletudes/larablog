@extends('layouts.main')
@section('maincontent')
    <h2>Edit the post {{$post->title}}</h2>
    <hr>
    <form action="/posts/edit/{{$post->id}}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="post-title">Title of your post</label>
            <input type="text" class="form-control" name="title" id="post-title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="post-preamble">Intro of your post</label>
            <textarea class="form-control" name="preamble" id="post-preamble" cols="30" rows="5">{{$post->preamble}}</textarea>
        </div>
        <div class="form-group">
            <label for="post-content">Content of your post</label>
            <textarea class="form-control" name="body" id="post-content" cols="30" rows="10">{{$post->body}}</textarea>
        </div>

        <input type="hidden" name="user_id" value="{{auth()->id()}}">

        <input class="btn btn-primary" type="submit" value="Modifier le post">
    </form>
@endsection

@if(Auth()->check())
<form action="/comments" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="comment-id">Your Comment</label>
        <textarea class="form-control" name="content" id="comment-id" cols="30" rows="10">{{old('content')}}</textarea>
    <input type="hidden" name="post_id" value="{{$post->id}}">
    <input type="hidden" name="user_id" value="{{auth()->id()}}">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
</form>
@else
    You must be <a href="{{route('login')}}">Logged in</a> to add a comment
@endif
@include('partials.errors')
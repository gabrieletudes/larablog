@if($post->comments)
<div class="list-group">
@foreach($post->comments as $comment)
    <div class="list-group-item flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
    <h5 class="mb-1">{{$comment->user->name}}</h5>
            <small class="mb-1">{{$comment->created_at}}</small>
        </div>
    <p class="mb-1">{{$comment->content}}</p>
    </div>
@endforeach
</div>
@endif
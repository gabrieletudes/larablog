<!--This is a backup file for the pagination-->
<nav class="blog-pagination">
    @if($blogPosts->currentPage() !== 1)
        <a class="btn btn-outline-secondary disabled" href="{{$blogPosts->previousPageUrl()}}">Older</a>
        <a class="btn btn-outline-primary" href="{{$blogPosts->nextPageUrl()}}">Newer</a>
    @elseif($blogPosts->currentPage() < $blogPosts->lastPage())
        <a class="btn btn-outline-primary" href="{{$blogPosts->previousPageUrl()}}">Older</a>
        <a class="btn btn-outline-primary" href="{{$blogPosts->nextPageUrl()}}">Newer</a>
    @elseif($blogPosts->lastPage())
        <a class="btn btn-outline-primary" href="{{$blogPosts->previousPageUrl()}}">Older</a>
        <a class="btn btn-outline-secondary disabled" href="{{$blogPosts->nextPageUrl()}}">Newer</a>
    @endif
</nav>
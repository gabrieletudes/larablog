<nav class="blog-pagination">
    @if($blogPosts->currentPage() !==1)
        <a class="btn btn-outline-primary" href="{{$blogPosts->previousPageUrl()}}">Older</a>
    @endif
    @if($blogPosts->hasMorePages())
        <a class="btn btn-outline-primary" href="{{$blogPosts->nextPageUrl()}}">Newer</a>
    @endif
</nav>
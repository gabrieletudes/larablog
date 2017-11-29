<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="#">New features</a>
            @if(Auth::check())
                @can('store_post',Blog\Post::class)
                    <a class="nav-link" href="posts/create">Create Post</a>
                @endcan
                <a href="" class="nav-link">{{Auth::user()->name}}</a>
                <a href="/logout" class="nav-link">Logout</a>
            @else
                <a href="/login" class="nav-link">Login</a>
            @endif
        </nav>
    </div>
</div>
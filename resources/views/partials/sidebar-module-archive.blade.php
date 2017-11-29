@if(count($archives))
    <div class="sidebar-module">
        <h4>Archives</h4>
        <?php setLocale(LC_TIME,'fr_FR')?>
        <ol class="list-unstyled">
            @foreach($archives as $archive)
                <li><a href="/posts/month/{{$archive->month}}/year/{{$archive->year}}">{{ucfirst($archive->format('F Y'))}}</a></li>
            @endforeach
        </ol>
    </div>
@endif
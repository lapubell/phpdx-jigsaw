@extends("_layouts/master")

@section("body")
    <h1>Blog Posts</h1>

    @foreach($posts as $post)
        <div class="post">
            <a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
            <p>{{ $post->excerpt() }}...</p>
        </div>
    @endforeach

@endsection

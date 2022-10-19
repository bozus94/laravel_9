<x-layouts.app title="Blog" meta-description="My personal meta description">

    <h1>Blog</h1>

    <a href="{{route('posts.create')}}">Crear</a>
    @foreach ($posts as $post)
    <h2> <a href="{{ route('post.show', $post->id) }}">{{ $post['title'] }}</a></h2>
    <h3>{{$post->body}}</h3>
    @endforeach

</x-layouts.app>

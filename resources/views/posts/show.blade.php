<x-layouts.app title="{{$post->title}}" meta-description="{{$post->body}}">
    <h1>POST - {{$post->title}}</h1>
    <a href="{{route('posts.index')}}">Regresar</a>
</x-layouts.app>

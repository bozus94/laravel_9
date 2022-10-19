<x-layouts.app title="Blog" meta-description="My personal meta description">

    <h1>Blog</h1>

    <a href="{{route('posts.create')}}">Crear</a>
    @foreach ($posts as $post)
    <div style="display:flex; align-items:center">
        <h2> <a href="{{ route('posts.show', $post->id) }}">{{ $post['title'] }}</a></h2> -
        <a href="{{route('posts.edit', $post->id)}}">Editar</a>
        <form action="{{route('posts.destroy', $post->id)}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit">eliminar</button>
        </form>
    </div>
    <h3>{{$post->body}}</h3>
    @endforeach

</x-layouts.app>

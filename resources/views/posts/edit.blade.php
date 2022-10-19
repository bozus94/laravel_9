<x-layouts.app title="Crear post" meta-description="Creando un post">
    <h1>Actulizar post - {{$post->id}}</h1>

    <form action="{{route('posts.update', $post->id)}}" method="POST">
        @csrf @method('PATCH')
        @include('posts.fields_forms')
        <button type="submit">Enviar</button><br>
    </form>

    <a href="{{route('posts.index')}}">Regresar</a>
</x-layouts.app>

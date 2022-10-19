<x-layouts.app title="Crear post" meta-description="Creando un post">
    <h1>Crear post</h1>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        @include('posts.fields_forms')
        <button type="submit">Enviar</button><br>
    </form>

    <a href="{{route('posts.index')}}">Regresar</a>
</x-layouts.app>

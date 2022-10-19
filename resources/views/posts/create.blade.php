<x-layouts.app title="Crear post" meta-description="Creando un post">
    <h1>Crear post</h1>

    <form action="{{route('posts.index')}}" method="POST">
        @csrf
        <label for="title">
            Title<br>
            <input type="text" name="title" id="title" value="{{old('title')}}"><br>
            @error('title')
            <small style="color: red">{{$message}}</small>
            @enderror
        </label><br>
        <label for="body">
            Body<br>
            <textarea name="body" id="body">{{old('body')}}</textarea><br>
            @error('body')
            <small style="color: red">{{$message}}</small>
            @enderror
        </label><br>
        <button type="submit">Enviar</button><br>
    </form>

    <a href="{{route('posts.index')}}">Regresar</a>
</x-layouts.app>

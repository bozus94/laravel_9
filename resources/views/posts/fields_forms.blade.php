<label for="title">
    Title<br>
    <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}"><br>
    @error('title')
    <small style="color: red">{{$message}}</small>
    @enderror
</label><br>
<label for="body">
    Body<br>
    <textarea name="body" id="body">{{old('body', $post->body)}}</textarea><br>
    @error('body')
    <small style="color: red">{{$message}}</small>
    @enderror
</label><br>

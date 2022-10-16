<x-layouts.app title="Blog" meta-description="My personal meta description">

    <h1>Blog</h1>

    @foreach ($posts as $post)
    <h3> {{ $post['title'] }} </h3>
    @endforeach

</x-layouts.app>

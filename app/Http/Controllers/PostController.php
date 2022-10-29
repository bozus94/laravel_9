<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request)
    {
        Post::create($request->validated());

        session()->flash('status', 'Post creado');

        return to_route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        session()->flash('status', 'Post actualizado!');
        return to_route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('status', 'Post eliminado');
        return to_route('posts.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = [
            ['title' => 'First article'],
            ['title' => 'Second article'],
            ['title' => 'third article'],
            ['title' => 'Fourth article'],
            ['title' => 'Fifth article'],
        ];

        return view('home', ['posts' => $posts]);
    }
}

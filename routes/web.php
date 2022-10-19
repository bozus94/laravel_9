<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;


Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::post('/blog', [PostController::class, 'store'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('post.show');
Route::view('/about', 'about')->name('about');

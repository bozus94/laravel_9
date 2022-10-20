<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedUserController;


Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');

Route::resource('blog', PostController::class)->names('posts')->parameter('blog', 'post');
/* Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/blog/{post}', [PostController::class, 'delete'])->name('posts.delete');
Route::get('/blog/edit/{post}', [PostController::class, 'edit'])->name('posts.edit'); */

route::get('/login', [AuthenticatedUserController::class, 'login'])->name('login');
route::post('/login', [AuthenticatedUserController::class, 'auth'])->name('login');

route::get('/register', [RegisteredUserController::class, 'register'])->name('register');
route::post('/register', [RegisteredUserController::class, 'store'])->name('resgister');

route::post('/logout', [AuthenticatedUserController::class, 'destroy'])->name('logout');

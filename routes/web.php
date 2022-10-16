<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::view('/about', 'about')->name('about');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;


Route::get('', [PostController::class, 'posts'])->name('posts');
Route::get('post/{post}/comments', [PostController::class, 'postDetail'])->name('postDetail');
Route::get('/search', [SearchController::class, 'search'])->name('search');
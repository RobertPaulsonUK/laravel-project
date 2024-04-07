<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MainController;
//Posts
Route::get('/posts', [PostController::class,'index'])->name('post.index');
Route::get('/posts/create', [PostController::class,'create'])->name('post.create');
Route::post('/posts', [PostController::class,'store'])->name('post.store');
Route::get('/posts/{post}', [PostController::class,'show'])->name('post.show');

Route::get('/posts/edit/{post}', [PostController::class,'edit'])->name('post.edit');
Route::patch('/posts/{post}', [PostController::class,'update'])->name('post.update');
Route::delete('/posts/{post}', [PostController::class,'destroy'])->name('post.destroy');
//End Posts

Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::get('/',[MainController::class,'index'])->name('main.index');
Route::get('/contacts',[ContactsController::class,'index'])->name('contacts.index');


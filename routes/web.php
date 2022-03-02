<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{post}/show', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::post('/posts/{post}', [PostController::class, 'update'])->name('post.update');
Route::get('/posts/{post}', [PostController::class, 'destroy'])->name('post.delete');

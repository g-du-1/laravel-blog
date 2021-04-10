<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

// TODO Clean this up

Route::get('/', [PostController::class, 'index']);
Route::get('/home', [PostController::class, 'index'])->name('home');

Route::resource('posts', PostController::class);
Route::resource('comments', CommentController::class);

Auth::routes();



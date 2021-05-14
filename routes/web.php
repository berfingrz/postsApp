<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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
    return view('welcome');
});

Route::get('/posts',[PostsController::class,'getAllPosts']);

Route::get('/addpost',[PostsController::class,'addPost']);

Route::post('/addpost',[PostsController::class,'addPostSubmit'])->name('post.addSubmit');

Route::get('post/{id}',[PostsController::class,'getPostByid'])->name('post.getPostByid');

Route::get('deletePost/{id}',[PostsController::class,'deletePost'])->name('post.deletePostByid');

Route::get('editPost/{id}',[PostsController::class,'editPost'])->name('post.editPost');

Route::post('editPost/',[PostsController::class,'updatePostSubmit'])->name('post.updatePost');
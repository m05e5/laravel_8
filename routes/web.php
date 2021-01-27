<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index'); 

Route::get('/user',[UserController::class,'index'])->name('user.index');

Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getAllPost');

Route::get('/posts/{id}', [ClientController::class,'getPostById'])->name('posts.getpostbyid');

Route::get('/posts/1/{userid}',[ClientController::class,'getPostByUserId'])->name('posts.getpostbyuserid');

Route::get('/add-post',[ClientController::class,'addPost'])->name('post.addpost');

Route::get('/update-post',[ClientController::class,'updatePost'])->name('post.update');

Route::get('/delete-post/{id}',[ClientController::class,'deletePost'])->name('post.delete');

Route::get('/fluent-string',[FluentController::class,'index'])->name('fluent.index');

Route::get('/login',[LoginController::class,'index'])->name('login.index')->middleware('checkuser');

Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');

Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');

Route::get('/session/set',[SessionController::class,'storeSessionData'])->name('session.store');

Route::get('/session/remove',[SessionController::class,'deleteSessionData'])->name('session.delete');

Route::get('/posts',[PostController::class,'getAllPost'])->name('post.getAllPost');

Route::get('add-post',[PostController::class,'addPost'])->name('post.add');

Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.edit');

Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.delete');

Route::post('add-post',[PostController::class,'addPostSubmit'])->name('post.addSubmit');

Route::get('/posts/{id}',[PostController::class, 'getPostById'])->name('post.getbyid');

Route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');

Route::get('/inner-join',[PostController::class,'innerJoinClause'])->name('post.innerJoinClause');

Route::get('/left-join',[PostController::class,'leftJoinClause'])->name('post.leftJoin');

Route::get('/right-join',[PostController::class,'rightJoinClause'])->name('post.rightJoin');

Route::get('/all-posts',[PostController::class,'getAllPostUsingModel'])->name('post.getallpostusingmodel');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

// Route::get('/hello', function () {
//     return '<h1>Hello World</h1>';
// });

// Route::get('/users/{id}', function ($id) {
//     // return 'This is user'. $id;
//     return 'This is user'.$name.' with an id of '.$id;
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });
Route::get('/', [PagesController::class, 'index'] );
Route::get('/about', [PagesController::class, 'about'] );
Route::get('/services', [PagesController::class, 'services'] );
Route::resource('posts', PostsController::class);
// Route::resource('posts', 'PostsController');
// Route::get('/posts', [PostsController::class, 'index']);
// Route::get('/posts', [PostsController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

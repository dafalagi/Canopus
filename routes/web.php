<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DiscussController;
use App\Http\Controllers\FavoriteController;

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

// GET Routes
Route::get('/', function(){
    return view('home', [
        'title' => 'Canopus',
    ]);
});

Route::get('/contents', [ContentController::class, 'index']);
Route::get('/contents/{content:slug}', [ContentController::class, 'show']);
Route::get('/forum', [DiscussController::class, 'index']);
Route::get('/forum/{discuss:slug}', [DiscussController::class, 'show']);
Route::get('/favorites/contents/{user:username}', [FavoriteController::class, 'showContents']);
Route::get('/favorites/discusses/{user:username}', [FavoriteController::class, 'showDiscusses']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// POST Routes
Route::post('/register', [UserController::class, 'store'])->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');

//DEV
Route::get('/dev', function(){
    return view('dev');
});
Route::get('/dashboard', function(){
    return view('dashboard.dashboard');
});
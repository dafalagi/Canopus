<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardContentController;
use App\Http\Controllers\DashboardDiscussController;
use App\Http\Controllers\DashboardFavoriteController;
use App\Http\Controllers\DashboardReportController;
use App\Http\Controllers\DashboardUserController;
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
Route::get('/dashboard', function(){
    return view('dashboard.layouts.main');
})->middleware('auth');

Route::get('/contents', [ContentController::class, 'index']);
Route::get('/contents/{content:slug}', [ContentController::class, 'show']);
Route::get('/favorites/contents/{user:username}', [FavoriteController::class, 'showContents']);
Route::get('/favorites/discusses/{user:username}', [FavoriteController::class, 'showDiscusses']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// POST Routes
Route::post('/register', [UserController::class, 'store'])->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Resource Routes
Route::resources([
    '/discusses' => DiscussController::class,
    '/dashboard/users' => DashboardUserController::class,
    '/dashboard/contents' => DashboardContentController::class,
    '/dashboard/discusses' => DashboardDiscussController::class,
    '/dashboard/favorites' => DashboardFavoriteController::class,
    '/dashboard/reports' => DashboardReportController::class,
]);

//DEV
Route::get('/test', function(){
    return view('test');
});
Route::get('/footer', function(){
    return view('component.footer');
});
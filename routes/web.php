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

// Free Access
Route::get('/', function(){
    return view('pages.home');
})->name('home');

Route::get('/users', [UserController::class, 'index']);
Route::get('/contents', [ContentController::class, 'index']);
Route::get('/contents/{content:slug}', [ContentController::class, 'show']);
Route::get('/favorites/contents/{user:username}', [FavoriteController::class, 'showContents']);
Route::get('/favorites/discusses/{user:username}', [FavoriteController::class, 'showDiscusses']);
Route::get('/discusses', [DiscussController::class, 'index']);
Route::get('/discusses/{discuss:slug}', [DiscussController::class, 'show']);

// Not Logged In Only
Route::middleware('guest')->group(function(){

    // GET
    Route::get('/register', [UserController::class, 'create'])->name('register');
    Route::get('/login', [UserController::class, 'login'])->name('login');

    // POST
    Route::post('/register', [UserController::class, 'store']);
    Route::post('/login', [UserController::class, 'authenticate']);
});

// Logged In Only
Route::middleware('auth')->group(function(){

    // POST
    Route::post('/logout', [UserController::class, 'logout']);

    // RESOURCE
    Route::resource('/discusses', DiscussController::class)->except('index', 'show');
});

// Admin Only
Route::middleware('admin')->group(function(){
    
    // GET
    Route::get('/dashboard', function(){
        return view('dashboard.layouts.main');
    });

    // RESOURCE
    Route::resource('/dashboard/users', DashboardUserController::class);
    Route::resource('/dashboard/contents', DashboardContentController::class);
    Route::resource('/dashboard/discusses', DashboardDiscussController::class);
    Route::resource('/dashboard/favorites', DashboardFavoriteController::class);
    Route::resource('/dashboard/reports', DashboardReportController::class);
});

// DEV
Route::get('/test', function(){
    return view('test');
});

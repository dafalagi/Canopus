<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DiscussController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\DashboardCommentController;
use App\Http\Controllers\DashboardContentController;
use App\Http\Controllers\DashboardDiscussController;
use App\Http\Controllers\DashboardFavoriteController;
use App\Http\Controllers\DashboardReportController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ReportController;

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
Route::view('/', 'pages.landing')->name('home');
Route::view('/about', 'pages.about');

Route::get('/contents', [ContentController::class, 'index']);
Route::get('/contents/details/{content}', [ContentController::class, 'show']);
Route::get('/contents/{content:category}', [ContentController::class, 'category']);
Route::get('/discusses', [DiscussController::class, 'index']);
Route::get('/discusses/{discuss}', [DiscussController::class, 'show']);

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

    // GET
    Route::get('/favorites/{user}', [FavoriteController::class, 'show']);

    // POST
    Route::post('/logout', [UserController::class, 'logout']);
    Route::post('/favorites/content/{content}', [FavoriteController::class, 'storeContent']);
    Route::post('/favorites/discuss/{discuss}', [FavoriteController::class, 'storeDiscuss']);
    Route::post('/favorites/delete/{favorite}', [FavoriteController::class, 'destroy']);
    Route::post('/likes/{discuss}', [LikeController::class, 'discuss']);
    Route::post('/likes/{comment}', [LikeController::class, 'comment']);
    Route::post('/reports', [ReportController::class, 'store']);

    // RESOURCE
    Route::resource('/discusses', DiscussController::class)->except('index', 'show');
    Route::resource('/users', UserController::class);
});

// Admin Only
Route::middleware('admin')->group(function(){
    
    // GET
    Route::view('/dashboard', 'dashboard.layouts.main');

    // RESOURCE
    Route::resources([
        '/dashboard/users' => DashboardUserController::class,
        '/dashboard/contents' => DashboardContentController::class,
        '/dashboard/discusses' => DashboardDiscussController::class,
        '/dashboard/favorites' => DashboardFavoriteController::class,
        '/dashboard/comments' => DashboardCommentController::class,
        '/dashboard/reports' => DashboardReportController::class,
    ]);
});

// DEV
Route::view('/test', 'test');

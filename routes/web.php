<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DiscussController;

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

Route::get('/', function(){
    return view('home', [
        'title' => 'Canopus',
    ]);
});

Route::get('/contents', [ContentController::class, 'index']);
Route::get('/contents/{content:slug}', [ContentController::class, 'show']);
Route::get('/forum', [DiscussController::class, 'index']);
Route::get('/forum/{discuss:slug}', [DiscussController::class, 'show']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

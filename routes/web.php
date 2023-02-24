<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SummonerController;
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


Route::get('/', [PostController::class, 'all']);
Route::get('/posts/{post}', [PostController::class, 'single']);



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/summoners/{region}/{name}/', [SummonerController::class, 'show'])->name('summoners');

Route::get('/admin/{any}', [AdminController::class, 'index'])->where('any', '.*');
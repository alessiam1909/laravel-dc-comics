<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;
use App\Http\Controllers\PageController as PageController;

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
Route::resource('/', PageController::class)->name('homepage');
//Route::get('/', [ComicController::class, 'getComic'])->name('home');

Route::get('/home/{slug}', [ComicController::class, 'getComicBySlug'])->name('details_fumetto');


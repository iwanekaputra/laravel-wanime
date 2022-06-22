<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;


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

Route::get('/', [AnimeController::class, 'index']);
Route::get('show/{slug}', [AnimeController::class, 'show'])->name('show');

Route::get('genres', [AnimeController::class, 'genres']);
Route::get('genres/{genre}', [AnimeController::class, 'genre']);

Route::get('seasons', [AnimeController::class, 'seasons']);
Route::get('seasons/{season}', [AnimeController::class, 'season']);

Route::get('search', [AnimeController::class, 'search']);

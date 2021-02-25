<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmesController;

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

Route::get('/',[FilmesController::class, 'create']);
Route::post('/',[FilmesController::class, 'search'])->name('search_film');
Route::get('/s={imdbID}',[FilmesController::class, 'info'])->name('info');
Route::get('/s={nomeRequest}/page={page}',[FilmesController::class, 'pagination']);



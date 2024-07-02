<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PageController::class, 'home'])->name("home");

Route::get('/movies-table', [PageController::class, 'moviesTable'])->name("moviesTable");

Route::get('/movieInfo/{index}', [PageController::class, 'movieInfo'])->name("movieInfo");

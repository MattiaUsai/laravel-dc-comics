<?php

use App\Http\Controllers\Admin\ComicController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class,'home']);
Route::get('/comicss', [PageController::class,'comics']);
Route::get('/addcomics', [PageController::class,'addcomics']);

Route::resource('comics', ComicController::class);
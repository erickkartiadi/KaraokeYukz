<?php

use App\Http\Controllers\SongController;
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


Route::get("/", [SongController::class, "index"])->name("home");
Route::get("/song/add", [SongController::class, "addSong"]);
Route::post("/song/add", [SongController::class, "store"]);
Route::get("/song/{song}", [SongController::class, "show"]);
Route::get("/song/{song}/edit", [SongController::class, "edit"]);
Route::put("/song/{song}", [SongController::class, "update"]);

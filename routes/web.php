<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController;
use App\Http\Controllers\GuestController;
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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [GuestController::class, 'index'])->name('welcome');
Route::get('/comics', [GuestController::class, 'comics'])->name('comics');

Route::resource('admin_comics', ComicsController::class);

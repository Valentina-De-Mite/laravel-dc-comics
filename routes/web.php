<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicsController;
use App\Http\Controllers\Guest\GuestController;
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

// // });
// Route::get('/', [GuestController::class, 'index'])->name('welcome');
// Route::get('/comics', [GuestController::class, 'comics'])->name('comics');

// Route::resource('admin_comics', ComicsController::class);
// // Route::get('/comics/{ccccc}', [ComicsController::class, 'showComics'])->name('admin_comics.show');


Route::get('/', [GuestController::class, 'index'])->name('welcome');

Route::resource('admin/comics', ComicsController::class);
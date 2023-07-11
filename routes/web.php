<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\FrontController;

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

Route::get('/', [FrontController::class, "welcome"])->name('home');

Route::get('/items/create', [ItemController::class, 'create'])->middleware('auth')->name('item.create');
Route::get('/category/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');
Route::get('/detail/item/{item}', [ItemController::class, 'showItem'])->name('item.show');
Route::get('/all/items', [ItemController::class, 'indexItem'])->name('item.index');
Route::get('/search/items', [ItemController::class, 'search'])->name('item.search');

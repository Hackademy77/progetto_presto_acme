<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;

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
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accept/item/{item}', [RevisorController::class, 'acceptItem'])->middleware('isRevisor')->name('revisor.accept_item');
Route::patch('/reject/item/{item}', [RevisorController::class, 'rejectItem'])->middleware('isRevisor')->name('revisor.reject_item');
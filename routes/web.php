<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
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
//home
Route::get('/', [HomeController::class, "index"])->name('home');

//todo
Route::prefix('/todo',)->group(function () {
    Route::get('/', [TodoController::class, "index"])->name('todo');
    Route::post('/store', [TodoController::class, "store"])->name('todo.store');
    Route::get('//edit', [TodoController::class, "edit"])->name('todo.edit');
    Route::post('/{task_id}/update', [TodoController::class, "update"])->name('todo.update');
    Route::get('/{task_id}/delete', [TodoController::class, "delete"])->name('todo.delete');
    Route::get('/{task_id}/done', [TodoController::class, "done"])->name('todo.done');
    Route::get('/{task_id}/sub', [TodoController::class, "sub"])->name('todo.sub');

});

Route::prefix('/banner',)->group(function () {
    Route::get('/', [BannerController::class, "index"])->name('banner');
    Route::post('/store', [BannerController::class, "store"])->name('banner.store');
    Route::get('/{banner_id}/delete', [BannerController::class, "delete"])->name('banner.delete');
    Route::get('/{banner_id}/status', [BannerController::class, "status"])->name('banner.status');

});


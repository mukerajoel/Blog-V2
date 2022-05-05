<?php

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

Route::get('/', [App\Http\Controllers\BlogsController::class, 'index'])->name('index');
// Route::get('/blog/{id}', [App\Http\Controllers\BlogsController::class, 'show'])->name('view');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\BlogsController::class, 'create'])->name('b.create');
Route::post('/store', [App\Http\Controllers\BlogsController::class, 'store'])->name('b.store');
Route::get('/blog/{id}', [App\Http\Controllers\BlogsController::class, 'show'])->name('b.show');
Route::get('/blog/edit/{id}', [App\Http\Controllers\BlogsController::class, 'edit'])->name('b.edit');
Route::post('/blog/{id}', [App\Http\Controllers\BlogsController::class, 'update'])->name('b.update');
Route::delete('/blog/{id}', [App\Http\Controllers\BlogsController::class, 'destroy'])->name('b.destroy');
Route::get('/comment', [App\Http\Controllers\BlogsController::class, 'comment'])->name('comment');
Route::post('/comment', [App\Http\Controllers\BlogsController::class, 'commentSave'])->name('c.save');






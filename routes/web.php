<?php

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

Route::get('/', \App\Http\Controllers\MainController::class)->name('general');
Route::post('/create',\App\Http\Controllers\CreateController::class)->name('create');
Route::get('/comments/{comment}/edit',\App\Http\Controllers\SubCommentController::class)->name('comment');
Route::post('/store',\App\Http\Controllers\CreateSubCommentController::class)->name('subcomment');

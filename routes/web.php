<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\CodeController::class, 'index'])->name('index');

Auth::routes();

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile')->middleware('auth');

Route::post('/create', [App\Http\Controllers\CodeController::class, 'create'])->name('create');

Route::get('/list', [App\Http\Controllers\CodeController::class, 'getlist'])->middleware('auth');

Route::get('/{token}', [App\Http\Controllers\CodeController::class, 'show'])->name('token');;

<?php

use App\Http\Controllers\Paste\PasteController;
use App\Http\Controllers\User\ProfileController;
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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [PasteController::class, 'index'])
    ->name('index');

Auth::routes();

Route::get('/profile', [ProfileController::class, 'index'])
    ->name('profile')
    ->middleware('auth');

Route::post('/create', [PasteController::class, 'create'])
    ->name('create');

Route::get('/list', [PasteController::class, 'list'])
    ->name('list')
    ->middleware('auth');

Route::get('/{token}', [PasteController::class, 'show'])
    ->name('token');;

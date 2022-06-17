<?php

use App\Http\Controllers\Paste\PasteCreateController;
use App\Http\Controllers\Paste\PasteGetController;
use App\Http\Controllers\Paste\PasteOptionsController;
use App\Http\Controllers\Paste\PastesGetController;
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

Route::get('/', [PasteOptionsController::class, 'index'])
    ->name('index');

Auth::routes();

Route::get('/profile', [\App\Http\Controllers\User\ProfileController::class, 'index'])
    ->name('profile')
    ->middleware('auth');

Route::post('/create', [PasteCreateController::class, 'create'])
    ->name('create');

Route::get('/list', [PastesGetController::class, 'getlist'])
    ->name('list')
    ->middleware('auth');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/{token}', [PasteGetController::class, 'show'])
    ->name('token');;




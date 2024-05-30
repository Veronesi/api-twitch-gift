<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KeyController;

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

Route::get('/', [AuthController::class, 'index']);
Route::get('auth/twitch', [AuthController::class, 'redirectToProvider']);
Route::get('auth/twitch/callback', [AuthController::class, 'handleProviderCallback']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('keys/bulk-create', [KeyController::class, 'createWithObsTwitchApi']);

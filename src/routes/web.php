<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StampController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [UserController::class, 'index']);
Route::get('/stamp', [StampController::class, 'stamp']);
Route::post('/stamps', [StampController::class, 'store']);
Route::middleware('auth')->group(function () {
Route::post('/users/stamp', [UserController::class, 'stamp']);
});
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/registers', [RegisterController::class, 'store']);
Route::post('/users', [UserController::class, 'store']);
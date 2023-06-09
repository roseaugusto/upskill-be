<?php

use App\Http\Controllers\QrController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/thank-you/{userId}', [QrController::class,'show']);
Route::get('/user-information/{userId}', [UserController::class,'showInfo']);
Route::apiResource('users', UserController::class);

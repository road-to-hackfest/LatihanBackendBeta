<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BlogController;

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
Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);

Route::middleware('auth:sanctum')->post(function () {
    Route::resource('blog', BlogController::class);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
// });

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\CallRegistersController;


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


Route::prefix('/')->controller(AuthController::class)->group(function () {
   Route::post('/applogin','onLogin');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

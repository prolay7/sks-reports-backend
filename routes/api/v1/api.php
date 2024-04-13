<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\CallRegistersController;
use App\Http\Controllers\backend\CallRegisterController;


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


Route::post('applogin', [AuthController::class, 'onLogin']);

Route::group(['prefix' => 'call-register','middleware'=>'auth:api'], function () {

    Route::get('/list',[CallRegisterController::class, 'index']);
    Route::get('/add',[CallRegisterController::class, 'store']);


});

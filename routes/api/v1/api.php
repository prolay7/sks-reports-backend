<?php

use App\Http\Controllers\Api\v1\BookAppointmentController;
use App\Http\Controllers\Api\v1\ConfigController;
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


Route::post('applogin', [AuthController::class, 'onLogin']);

Route::get('/getStateList',['middleware'=>'auth:api', ConfigController::class, 'getStateList']);

/*Call Register Api For Relationship manager  */
Route::group(['prefix' => 'call-register','middleware'=>'auth:api'], function () {

    Route::get('/list',[CallRegistersController::class, 'index']);
    Route::get('/add',[CallRegistersController::class, 'store']);

});

/*Book Appointment Api For Relationship manager  */
Route::group(['prefix' => 'book-appointment','middleware'=>'auth:api'], function () {
    Route::get('/institute-list',[BookAppointmentController::class, 'getInstituteList']);
    Route::get('/get-details-institute-information/{instId}',[BookAppointmentController::class, 'getDetailsInstituteInformation']);
    Route::get('/list',[BookAppointmentController::class, 'onLoadBookAppointments']);
    Route::post('/add',[BookAppointmentController::class, 'storeBookAppointments']);

});


/*Visit Register Api For Relationship manager  */
Route::group(['prefix' => 'visit-register','middleware'=>'auth:api'], function () {
    Route::get('/state-list',[BookAppointmentController::class, 'getInstituteList']);
    Route::get('/get-details-institute-information/{instId}',[BookAppointmentController::class, 'getDetailsInstituteInformation']);
    Route::get('/list',[BookAppointmentController::class, 'onLoadBookAppointments']);
    Route::post('/add',[BookAppointmentController::class, 'storeBookAppointments']);

});

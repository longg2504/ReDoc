<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::namespace('App\Http\Controllers\Client')->group(function () {

    Route::post('/medical-check-up/symptoms', 'MedicalCheckController@getSymptoms')->name('client.getSymptoms');
    Route::post('/medical-check-up/diseases', 'MedicalCheckController@getDiseases')->name('client.getDiseases');
});

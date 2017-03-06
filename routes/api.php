<?php

use Illuminate\Http\Request;

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

Route::resource('makers', 'MakerController', ['except' => ['create','edit']]);

Route::resource('vehicles', 'VehicleController', ['only' => ['index']]);

Route::resource('makers.vehicles', 'MakerVehicleController', ['except' => ['edit','create']]);


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

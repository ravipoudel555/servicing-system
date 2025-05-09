<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\MechanicController;
use App\Http\Controllers\Api\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function (Request $request) {
    return 'test hello';
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::apiResource('mechanics', MechanicController::class);
Route::apiResource('customers', CustomerController::class);

//[scoped] meaning -> the vehicle resource is always a part of customer i.e. vehicle is scoped by customer
Route::apiResource('customers.vehicles', VehicleController::class)->scoped(['vehicle' => 'customer']);


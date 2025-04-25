<?php

use App\Http\Controllers\Api\MechanicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function (Request $request) {
    return 'test hello';
});


Route::get('/mechanics', [MechanicController::class, 'index']);

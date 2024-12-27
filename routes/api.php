<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiAccessController;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('students',StudentController::class)->middleware('auth:api');

Route::post('login',[ApiAccessController::class,'login']);

Route::get('login',[ApiAccessController::class,'index'])->name('login');

Route::post('register',[ApiAccessController::class,'register'])->middleware('auth:api');

Route::post('first_user',[ApiAccessController::class,'first-user']);




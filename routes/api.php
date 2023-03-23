<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DonationController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum', 'isAPIAdmin'])->group(function () {

    Route::get('/checkingAuthenticated', function (){
        return response()->json(['message'=>'You are in', 'status'=>200],200);
    });


});
Route::get('/donations', [DonationController::class, 'index']);


Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('/checkout/{id}', [PaymentController::class, 'checkout']);
    Route::post('/donation', [DonationController::class, 'create']);
    Route::get('/donations', [DonationController::class, 'index']);
  
});
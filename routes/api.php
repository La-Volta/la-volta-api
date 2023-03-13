<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

{/*Route::middleware(['auth:sanctum'])->group(function)
{
    Route::post('logout', [AuthController::class, 'logout']);

};*/}

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/api/login', [\App\Http\Controllers\Api\userController::class, 'login']);
Route::post('/api/create',[\App\Http\Controllers\Api\ticketController::class,'create'])->middleware('auth:sanctum') ;
Route::get('/allTickets',[\App\Http\Controllers\Api\ticketController::class,'show'])->middleware('auth:sanctum');
Route::post('/createComment/{id}',[\App\Http\Controllers\Api\ticketController::class,'createComment'])->middleware('auth:sanctum');

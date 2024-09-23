<?php

use App\Http\Controllers\Web\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('/login','auth.login')->name('login');
Route::view('/register','auth.register')->name('register');
Route::post('/login/user',[userController::class,'login'])->name('loginUser');
Route::post('/register/user',[userController::class,'register'])->name('registerUser');
Route::view('/notification','notification')->name('notification');
Route::view('/ticket','ticket')->name('ticket');

Route::post('/create-ticket',[\App\Http\Controllers\Web\ticketController::class,'create'])->middleware('auth')->name('createTikect');
Route::get('/show_ticket',[\App\Http\Controllers\Web\ticketController::class,'show'])->middleware('auth')->name('showTikect');
Route::post('/create-comment/{id}',[\App\Http\Controllers\Web\ticketController::class,'createComment'])->middleware('auth')->name('createcomment');

Route::group(['middleware' => ['auth','checkStatus:admin']],function(){
    Route::get('/all-users',[userController::class,'index'])->name('allUsers');



});

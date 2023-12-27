<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
//pages route
Route::view('/Registration', 'pages.auth.registration-page');
Route::view('/Login', 'pages.auth.login-page');




//backend route
Route::post("/userRegistration",[UserController::class,'userRegistration']);
Route::post("/userLogin",[UserController::class,'userLogin']);

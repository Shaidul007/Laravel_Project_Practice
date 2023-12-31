<?php

use App\Http\Controllers\PersonalInfoController;
use App\Models\PersonalInfo;
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
    return view('Frontend.pages.home');
});

Route::get('/dashboard', function () {
    return view('Backend.layouts.app');
});


//route for backend index page 
Route::resource('personal-info', PersonalInfoController::class);
Route::resource('personal-info', PersonalInfoController::class);
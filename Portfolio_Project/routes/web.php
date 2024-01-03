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
Route::get('/personal-info', [PersonalInfoController::class, 'index'])->name('personal-info');
Route::get('/personal-info/create', [PersonalInfoController::class, 'create'])->name('create');
Route::post('/personal-info', [PersonalInfoController::class, 'store'])->name('store');
Route::get('/personal-info/{id}', [PersonalInfoController::class, 'show'])->name('show');
Route::get('/personal-info/{id}/edit', [PersonalInfoController::class, 'edit'])->name('edit');
Route::post('/personal-info/{id}', [PersonalInfoController::class, 'update'])->name('update');
Route::delete('/personal-info/{id}', [PersonalInfoController::class, 'destroy'])->name('destroy');
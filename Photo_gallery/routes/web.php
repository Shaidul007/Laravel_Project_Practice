<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AlbumController;

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

Route::get('/home', [MainController::class, 'home'])->name('home');
//album route

Route::get( '/albums', [AlbumController::class, 'index'] )->name( 'album.index' );
Route::get( '/albums/create', [AlbumController::class, 'create'] )->name( 'album.create' );
Route::post( '/albums', [AlbumController::class, 'store'] )->name( 'album.store' );
Route::get( '/albums/{id}', [AlbumController::class, 'show'] )->name( 'album.show' );


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PembayaranController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//route resource
Route::resource('/', \App\Http\Controllers\HomeController::class);
Route::resource('/siswas', \App\Http\Controllers\PostController::class);
Route::resource('/pembayarans', \App\Http\Controllers\PembayaranController::class);




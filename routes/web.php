<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',"App\Http\Controllers\HomeController@index");
Route::get('/{name}',"App\Http\Controllers\HomeController@index2");
// Route::post('/1',[App\Http\Controllers\HomeController::class,"index"]);
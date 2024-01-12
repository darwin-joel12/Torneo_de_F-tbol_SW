<?php

use App\Http\Controllers\EgresoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\indexController;

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

    Route::group(['prefix'=> 'admin'],function(){
    Route::get('Panel-Administrativo', [indexController::class, 'index'])->name('dashboard');
    });
    
    Route::resource('egresos', EgresoController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

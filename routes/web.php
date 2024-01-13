<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\indexController;
use App\Http\Livewire\Egresos;
use App\Http\Livewire\Ingresos;

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

Route::group(['prefix' => 'admin'], function () {
    
    Route::get('Panel-Administrativo', [indexController::class, 'index'])->name('dashboard');
    
    //Route::get('egresos', [Egresos::class, 'render'])->name('egresos.index');
    Route::get('ingresos', [Ingresos::class, 'render'])->name('ingresos.index'); 
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



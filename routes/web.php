<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::prefix('poemas')->group(function(){
    Route::get('',function(){
        return view('poemas.index');
    })->name('poemas.index');
});
Route::prefix('articulos')->group(function(){
    Route::get('',function(){
        return view('articulos.index');
    })->name('articulos.index');
});
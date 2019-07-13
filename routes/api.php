<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('familias', function () {
    $data = \App\Familias::get();
    return response()->json($data,200,[],256);
})->name('api.familias');
Route::get('categorias', function () {

});
Route::get('marcas', function () {

});
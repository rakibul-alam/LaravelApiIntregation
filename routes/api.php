<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// /gghgh
Route::namespace('App\Http\Controllers\Api')->group(function () {
    Route::get('/tests', 'TestController@index');
    Route::post('/tests', 'TestController@store');
    Route::delete('/tests', 'TestController@destroy');
});
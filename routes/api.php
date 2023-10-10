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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/events', 'Api\EventController@index');
Route::get('/events/{id}', 'Api\EventController@show');

Route::post('/signup', 'Api\UserController@createUser');
Route::post('/signin', 'Api\UserController@loginUser');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/events', 'Api\EventController@store');
    Route::delete('/events/{id}', 'Api\EventController@destroy');

});
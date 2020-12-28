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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('contoh', 'RestController@save');
Route::get('person', 'RestController@getAllPerson');
Route::post('person', 'RestController@savePerson');
Route::put(
    'person/{id}',
    'RestController@updatePerson'
);

Route::delete(
    'person/{id}',
    'RestController@deletePerson'
);

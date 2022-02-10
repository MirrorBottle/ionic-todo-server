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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([
    'namespace' => 'App\Http\Controllers',
], function() {
    
    // AUTH
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');

    // TODO
    Route::apiResource('todos', 'TodoController');

    // NOTE
    Route::apiResource('notes', 'NoteController');

    // LECTURE
    Route::get('lectures', 'LectureController@index');

    // ABSENT
    Route::apiResource('absents', 'AbsentController');

    // USERS
    Route::get('users', 'UserController@index');
    
});


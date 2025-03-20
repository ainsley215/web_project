<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiPendidikanController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'pendidikan'], function () {
    Route::get('/', 'ApiPendidikanController@getAll');
    Route::get('/{id}', 'ApiPendidikanController@getById');
    Route::post('/', 'ApiPendidikanController@create');
    Route::put('/{id}', 'ApiPendidikanController@update');
    Route::delete('/{id}', 'ApiPendidikanController@delete');
});
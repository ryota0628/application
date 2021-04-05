<?php
//ルーティングエラーは書く順番と関係ある
Route::get('/', 'RegisterController@index');
Route::get('/schedules/register', 'RegisterController@register');
Route::get('/schedules/{task}','RegisterController@show');
Route::delete('/schedules/{task}', 'RegisterController@delete');
Route::get('/schedules/{task}/edit', 'RegisterController@edit');
Route::put('/schedules/{task}', 'RegisterController@update');
Route::post('/schedules', 'RegisterController@store');

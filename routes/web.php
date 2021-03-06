<?php
//ルーティングエラーは書く順番と関係ある
Route::get('/', 'CalendarController@show');
Route::get('/schedules/register', 'RegisterController@register');
Route::get('/schedules/{task}','RegisterController@show');//該当データのidがURLに入ったページに飛ぶ
Route::delete('/schedules/{task}', 'RegisterController@delete');
Route::get('/schedules/{task}/edit', 'RegisterController@edit');
Route::put('/schedules/{task}', 'RegisterController@update');
Route::post('/schedules', 'RegisterController@store');

Auth::routes();

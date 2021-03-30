<?php

Route::get('/', 'RegisterController@index');
Route::get('/schedules/{task}','RegisterController@show');
Route::get('/schedules/register', 'RegisterController@register');
Route::post('/schedules', 'RegisterController@store');

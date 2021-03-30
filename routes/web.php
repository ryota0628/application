<?php

Route::get('/', 'RegisterController@index');
Route::get('/schedules/register', 'RegisterController@register');
Route::post('/schedules', 'RegisterController@store');

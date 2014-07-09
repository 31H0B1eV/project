<?php


Route::get('/', 'HomeController@index');

Route::controller('users', 'UsersController');

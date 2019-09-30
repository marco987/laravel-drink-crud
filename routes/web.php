<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cube/drink', 'MyController@getDrink');

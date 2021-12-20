<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/stores', 'Admin\\StoreController@index');

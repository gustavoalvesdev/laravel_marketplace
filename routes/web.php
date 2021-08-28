<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/model', function () {
    //$products = \App\Product::all();

    //$user = new \App\User();
    //$user = \App\User::find(1);
    //$user->name = 'Usuário Teste Editado...';

    //$user->save();

    //return $products;

    //return \App\User::all();
    //return \App\User::where('name', 'Creola Greenholt V')->get();
    //return \App\User::where('name', 'Creola Greenholt V')->first();
    return \App\User::paginate(10);
});

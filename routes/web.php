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
    //return \App\User::paginate(10);

    // Mass Assignment - Atribuição em Massa

    // $user = \App\User::create([
    //     'name' => 'Nanderson Castro',
    //     'email' => 'email100@email.com',
    //     'password' => bcrypt('123345566')
    // ]);

    // Mass Update
    // $user = \App\User::find(42);
    // $user->update([
    //     'name' => 'Atualizando com Mass Update'
    // ]); // true ou false

    // Como eu faria para pegar a loja de um usuário
    $user = \App\User::find(4);

    //return $user->store; // 1 para 1 - retorna o objeto único (Store)  | n para n retorna collection de dados

    //dd($user->store()->count());

    // Pegar os produtos de uma loja
    $loja = \App\Store::find(18);
    //$loja->products->count();

    // Pegar as lojas de uma categoria de uma loja
    $categoria = \App\Category::find(1);
    $categoria->products;

    //return \App\User::all();
});

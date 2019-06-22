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

Route::get('/controller/clients/cadastrar', 'ClientsController@cadastrar');

Route::get('/repeticoes/{value}', function ($value) {
    return view('repeticoes')
        ->with('value', $value)
        ->with('myArray', [
            'Teste0' => '0',
            'teste1' => '1',
            'teste2' => '2',
        ]);
});

Route::get('/home', function(){
    return view('home', [
        'titulo'    => 'Home',
        'nome'      => 'Wesley',
        'sobrenome' => 'Nunes'
    ]);
});

Route::get('/cliente/cadastrar', function() {
    return view('cliente.cadastrar', [
        'nome'          => 'Wesley',
        'sobrenome'     => 'Nunes'
    ]);
});

// Route::get('/cliente', function(){
//     return "Hello Word";
// });

// Route::get('/admin/cliente', function(){
//     return "Admin";
// });

// Route::get('/cliente-echo', function(){
//     echo "Texto com echo";
// });

// Route::get('/produto/{name}/{id}', function($name, $id){
//     return "Produto $name - $id";
// });

// Route::get('/fornecedor/{name}/{id?}', function($name, $id = null){
//     return "Fornecedor $name - $id";
// });


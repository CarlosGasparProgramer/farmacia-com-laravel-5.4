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
    return view('login.login');
});
Route::get('/login', function () {
    return view('login.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
   
    // Medicamentos
    Route::resource('medicamento', 'MedicamentosController');
    Route::any('medicamento/search', 'MedicamentosController@search')->name('medicamento.search');
    
    Route::resource('entrada', 'EntradaController');
    Route::any('entrada/search', 'EntradaController@search')->name('entrada.search');
    Route::get('buscar/{id}', 'MedicamentosController@buscar');
    Route::resource('forma', 'FormaController');
    Route::post('search', 'FormaController@search')->name('forma.search');
    
    Route::resource('carrinho', 'CarrinhoController');
    
    // stock
     Route::any('stock-pesquisar-medicamento', 'CarrinhoController@searchMedicamento')->name('stock.pesquisar');
});


Auth::routes();



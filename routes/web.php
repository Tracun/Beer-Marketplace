<?php
use App\Http\Controllers\CategoryController;

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

/* Rotas de testes - Modificar conforme avanço */

// a url ira conter o id do produto para ser passado para a pagina carregar correto
Route::get('/product-page', function () {
    return view('product-page');
});

// liberar apenas para quando não estiver logado
Route::get('/register', function () {
    return view('register-consumer');
});

Route::resource('register-consumer', 'ConsumerController');

// Registra vendedores
Route::get('/register-vendors', function () {
    return view('register-vendors');
});

// Registra produtos
Route::get('/register-products', 'ShowFormProductsController@index');

Route::resource('products', 'ProductsController');



/* ************* */


Route::group(['middleware' => 'web'], function(){

  Route::get('/', 'ProductsController@index');

});

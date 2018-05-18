<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;

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


// liberar apenas para quando não estiver logado
Route::get('/register', 'ConsumerController@create');
Route::resource('register-consumer', 'ConsumerController');

// Registra vendedores
Route::get('/register-vendor', function () {
    return view('forms.register-vendors');
});
Route::resource('register-vendors', 'VendorController');


// Registra produtos
Route::get('/register-products', 'ShowFormProductsController@index');
Route::resource('products', 'ProductsController');


Route::group(['middleware' => 'web'], function(){

  Route::get('/', 'IndexController@showIndex');

  Route::get('/product-page/{product}', 'ProductsController@show');

});


Route::get('/login', function () {
    return view('forms.login');
});

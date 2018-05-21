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





Route::group(['middleware' => 'web'], function(){

  Route::get('/', 'IndexController@showIndex');

  Route::get('/product-page/{product}', 'ProductsController@show');

  // Registra produtos
  Route::get('/register-product', 'ShowFormProductsController@index');

  Route::get('/register-product/{product}/edit', 'ShowFormProductsController@edit');
  Route::get('/product-list/{product}/delete', 'ProductsController@destroy');


  Route::resource('products', 'ProductsController');

  Route::get('/product-list', 'ProductsController@list')->name('list');
});


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/reset-password', function () {
    return view('auth.reset-password');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/master', function () {
    return view('adm.master');
});

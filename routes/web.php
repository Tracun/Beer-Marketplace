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
//
// Route::get('/', function () {
//     return view('welcome');
// });

// a url ira conter o id do produto para ser passado para a pagina carregar correto
Route::get('/product-page', function () {
    return view('product-page');
});


Route::group(['middleware' => 'web'], function(){

  Route::get('/', function () {
      return view('index');
  });

  Route::get('/index', function () {
      return view('index');
  });
});

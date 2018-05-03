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


// a url ira conter o id do produto para ser passado para a pagina carregar correto
Route::get('/product-page', function () {
    return view('product-page');
});


Route::group(['middleware' => 'web'], function(){

  Route::get('/index', function () {
      return view('index');
  });

// rota deve chamar um controler,
//essa função será responsabilidade do controler Category
 Route::get('/', function () {
    $categories = \App\Category::get();
    foreach ($categories as $category) {

    }
    return view('index', ['categories' => $category->name]);
   });

});

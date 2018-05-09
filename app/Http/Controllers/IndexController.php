<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Nationality;

class IndexController extends Controller
{

  public function showIndex(){
    $categories = Category::get();
    $countries = Nationality::get();

    return view('index', ['categories' => $categories, 'countries' => $countries]);
  }
}

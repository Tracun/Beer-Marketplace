<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Nationality extends Model
{

  protected $fillable = [
      'country'
  ];

  public function produtos(){
    return $this->hasMany(Product::class);
}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model{
    //
    protected $fillable = [
        'name'
    ];

    public function produtos(){
      return $this->hasMany(Product::class);
  }

}

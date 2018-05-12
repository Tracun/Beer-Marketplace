<?php
/**
*
*  @author: Lucas Alves
*
*/

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vendor;
use App\Category;
use App\Nationality;


class Product extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id_vendor' ,'maker', 'name','price', 'id_category', 'ml', 'IBU','ABV',
    'id_nationality', 'stock', 'ingredients', 'descr','img'
  ];


  public function fornecedor(){
    return $this->hasOne(Vendor::class);
  }

  public function categoria(){
    return $this->hasOne(Category::class);
  }

  public function origem(){
    return $this->hasOne(Nationality::class);
  }

}

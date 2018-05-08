<?php
/**
*
*  @author: Lucas Alves
*
*/

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name','price', 'descr', 'id_category', 'IBU','ABV', 'id_nationality', 'img'
  ];
}

protected $hidden = [
    'id_provider'
];
}

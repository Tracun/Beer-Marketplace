<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumer extends Model{


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'cpf', 'first_name','last_name', 'email', 'password','gender', 'date_born', 'CEP', 'endereco', 'numEndereco',
      'bairro', 'cidade', 'uf', 'phone', 'mobile'
  ];



}

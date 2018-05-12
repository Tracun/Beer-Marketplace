<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Vendor extends Model
{

  protected $fillable = [
      'cnpj', 'razao_social', "nome_fantasia", 'nome_responsavel',
      'user_login', 'password', 'email', 'CEP', 'endereco', 'numEndereco',
      'bairro', 'cidade', 'uf', 'phone'
  ];

  public function produtos(){
    return $this->hasMany(Product::class);
  }
}

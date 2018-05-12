<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
           $table->increments('id');
           $table->string('cnpj', 18);
           $table->string("razao_social",50);
           $table->string("nome_fantasia", 50);
           $table->string('nome_responsavel', 50);
           $table->string('user_login',15);
           $table->string('password'); //maxlength = 8 no input
           $table->string('email');
           $table->string('CEP', 9);
           $table->string('endereco', 50);
           $table->integer('numEndereco');
           $table->string('bairro', 20);
           $table->string('cidade', 20);
           $table->string('uf', 2);
           $table->string('phone', 14);
           $table->rememberToken();
           $table->timestamps();

    //       $table->primary('cnpj'); // problemas com id e  cnpj, ainda em decisão
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}

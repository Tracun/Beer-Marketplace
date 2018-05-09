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
           $table->string('cnpj');
           $table->string("razao_social",50);
           $table->string("nome_fantasia", 50);
           $table->string('nome_responsavel', 50);
           $table->string('user_login',15);
           $table->string('password');
           $table->string('email');
           $table->string('phone', 14);
           $table->rememberToken();
           $table->timestamps();
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

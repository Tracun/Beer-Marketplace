<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumers', function (Blueprint $table) {
            // $table->increments('id')->unsigned();
            $table->string('cpf', 14);
            $table->string("first_name", 50);
            $table->string("last_name",50);
            $table->string('email', 100);
            $table->string('password'); //maxlength = 8 no input
            $table->string('gender');
            $table->date('date_born');
            $table->string('cep', 9);
            $table->string('endereco', 50);
            $table->integer('numEndereco');
            $table->string('bairro', 20);
            $table->string('cidade', 20);
            $table->string('uf', 2);
            $table->string('phone', 14);
            $table->string('mobile', 14);
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
        Schema::dropIfExists('consumers');
    }
}

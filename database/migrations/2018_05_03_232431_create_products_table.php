<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_provider');
            $table->string('name', 30);
            $table->integer('price');
            $table->text('descr');
            $table->integer('id_category')->unsigned();
            $table->integer('IBU');
            $table->integer('ABV');
            $table->integer('id_nationality')->unsigned();
            $table->string('img');
            $table->timestamps();
        });

        Schema::table('products', function ($table) {
            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_nationality')->references('id')->on('nationalities');
        });


    }

    /**
     * Reverse the migrations.
     *p0
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

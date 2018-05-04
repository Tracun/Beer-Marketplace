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
            $table->integer('id_vendor');
            $table->string('name', 30);
            $table->double('price', 3, 2);
            $table->text('descr');
            $table->integer('id_category')->unsigned();
            $table->integer('IBU');
            $table->integer('ABV');
            $table->integer('id_nationality')->unsigned();
            $table->timestamps();
        });

        Schema::table('products', function ($table) {
            $table->foreign('id_category')->references('id')->on('categories');
            // $table->foreign('id_flavor')->references('id')->on('flavors');
        });

        // Schema::table('products', function ($table) {
        //     $table->foreign('id_flavor')->references('id')->on('flavors');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

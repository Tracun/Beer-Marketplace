<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product = [
        0 => [
        'id_provider' => '1',
        'name' => 'teste',
        'price' => '100.00',
        'descr' => 'teste',
        'id_category' => '1',
        'IBU' => '10',
        'ABV' => '15',
        'id_nationality' => '2',
        'img' => 'teste'
      ]
      ];
      DB::table('products')->insert($product);
    }
}

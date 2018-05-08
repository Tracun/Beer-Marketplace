<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $category = [
        0 => [
        'name' => 'teste',
      ]
      ];
      DB::table('categories')->insert($category);
    }
}

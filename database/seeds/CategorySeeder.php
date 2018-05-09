<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

      $today = date('y-m-d G:i:s');
      $categories = array('Pilsen', 'Pale Ale', 'Lager', 'Weissbier','Amber Ale',
                          'Porter', 'Red Ale', 'Strong Ale', 'India Pale Ale', 'Fruit Beer' );
      sort($categories);
      foreach ($categories as $category){
        DB::table('categories')->insert([
            'name' => $category,
            'created_at' => $today,
            'updated_at' => $today
          ]);
      }

    }
}

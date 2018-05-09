<?php

use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

      $today = date('y-m-d G:i:s');

      $nationalities= array('Brasil', 'Alemanha', 'Bélgica', 'Inlgaterra', 'EUA',
       'Argentina', 'Uruguai' );

      sort($nationalities);

      foreach ($nationalities as $nationality){
        DB::table('nationalities')->insert([
            'from' => $nationality,
            'created_at' => $today,
            'updated_at' => $today
          ]);
      }

    }
}

<?php

use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $nationality = [
        0 => [
        'country' => 'teste',
      ]
      ];
      DB::table('nationalities')->insert($nationality);
    }
}

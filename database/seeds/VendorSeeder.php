<?php

use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $today = date('y-m-d G:i:s');

      DB::table('vendors')->insert([
          'cnpj'              => '12345678912345',
          'razao_social'      => 'T3L',
          'nome_fantasia'     => 'T3L',
          'nome_responsavel'  => 'Lucas',
          'user_login'        => 'Lucaaslb',
          'password'          => '123456',
          'email'             => 't3l@t3l.com',
          'phone'             => '12345678901234',
          'created_at'        => $today,
          'updated_at'        => $today
        ]);
    }
}

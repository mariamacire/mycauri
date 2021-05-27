<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pays')->insert(['name' =>'dakar']);
        DB::table('pays')->insert(['name' =>'Guinee']);
        DB::table('pays')->insert(['name' =>'cote ivoire']);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agences')->insert([
            'name' => 'conakry agence 1',
            'attitude' => 9.601861,
            'longitude' => -13.646111,
            'adresse' =>'rue de luniversite mercure',
            'pays_id' =>'2',
            ]);

        DB::table('agences')->insert([
            'name' => 'montreal',
            'attitude' => 50.8549217,
            'longitude' => -130.2094884,
            'adresse' =>'montreal',
            'pays_id' =>'3',
            ]);
        
        DB::table('agences')->insert([
            'name' => 'dakar agence 3',
            'attitude' => 14.473609,
            'longitude' => -16.7618486,
            'adresse' =>'medina',
            'pays_id' =>'1',
            ]);

        DB::table('agences')->insert([
            'name' => 'conakry agence 2',
            'attitude' => 9.60589,
            'longitude' => -13.63706,
            'adresse' =>'hamadalaye',
            'pays_id' =>'2',
            ]);

        DB::table('agences')->insert([
            'name' => 'dakar agence 1',
            'attitude' => 14.71858,
            'longitude' => -17.48813,
            'adresse' =>'rue 10 angle 25',
            'pays_id' =>'1',
            ]);

        DB::table('agences')->insert([
            'name' => 'dakar agence 2',
            'attitude' => 14.71928,
            'longitude' => -17.48652,
            'adresse' =>'medina',
            'pays_id' =>'1',
            ]);

        DB::table('agences')->insert([
            'name' => 'cote ivoire agence 1',
            'attitude' => 8.05638,
            'longitude' => -6.18762,
            'adresse' =>'rue 15',
            'pays_id' =>'3',
            ]);


    }
}

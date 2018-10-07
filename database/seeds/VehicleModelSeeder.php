<?php

use Illuminate\Database\Seeder;

class VehicleModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vehicle_models')->insert([
            'make' => 'Toyota',
            'model' => 'Vios 2018',
            'size' => 'Sedan',
            'transmission_type' => 'Automatic',
        ]);
        DB::table('vehicle_models')->insert([
            'make' => 'Nissan',
            'model' => 'Terra 2018',
            'size' => 'SUV',
            'transmission_type' => 'Manual',
        ]);
        DB::table('vehicle_models')->insert([
            'make' => 'Kia',
            'model' => 'Soul 2015',
            'size' => 'Subcompact Crossover SUV',
            'transmission_type' => 'AT/MT',
        ]);
    }
}

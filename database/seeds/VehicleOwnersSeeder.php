<?php

use Illuminate\Database\Seeder;

class VehicleOwnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vehicle_owners')->insert([
            'vehicle_id' => '2',
            'plate_number' => 'JFK 462',
        ]);
        DB::table('vehicle_owners')->insert([
            'vehicle_id' => '3',
            'plate_number' => 'WSJ 817',
        ]);

        DB::table('vehicle_owners')->insert([
            'vehicle_id' => '1',
            'plate_number' => 'IDK 109',
        ]);

        DB::table('vehicle_owners')->insert([
            'vehicle_id' => '3',
            'plate_number' => 'SML 169',
        ]);

        DB::table('vehicle_owners')->insert([
            'vehicle_id' => '2',
            'plate_number' => 'SkL 201',
        ]);
    }
}

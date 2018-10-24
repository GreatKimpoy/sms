<?php

use Illuminate\Database\Seeder;

class InspectionTechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('inspection_technicians')->insert([
            'inspection_id' => '1',
            'technician_id' => '3',
        ]);
        DB::table('inspection_technicians')->insert([
            'inspection_id' => '1',
            'technician_id' => '2',
        ]);
        DB::table('inspection_technicians')->insert([
            'inspection_id' => '2',
            'technician_id' => '3', 
        ]);
        DB::table('inspection_technicians')->insert([
            'inspection_id' => '2',
            'technician_id' => '1', 
        ]);
        DB::table('inspection_technicians')->insert([
            'inspection_id' => '3',
            'technician_id' => '3', 
        ]);
        DB::table('inspection_technicians')->insert([
            'inspection_id' => '4',
            'technician_id' => '4', 
        ]);
        DB::table('inspection_technicians')->insert([
            'inspection_id' => '5',
            'technician_id' => '5', 
        ]);
        DB::table('inspection_technicians')->insert([
            'inspection_id' => '5',
            'technician_id' => '6', 
        ]);

    }
}

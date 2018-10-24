<?php

use Illuminate\Database\Seeder;

class InspectionServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('inspection_services')->insert([
            'inspection_id' => '1',
            'service_id' => '1', 
        ]);
        DB::table('inspection_services')->insert([
            'inspection_id' => '2',
            'service_id' => '2', 
        ]);
        DB::table('inspection_services')->insert([
            'inspection_id' => '3',
            'service_id' => '3', 
        ]);
        DB::table('inspection_services')->insert([
            'inspection_id' => '4',
            'service_id' => '4', 
        ]);

        DB::table('inspection_services')->insert([
            'inspection_id' => '5',
            'service_id' => '9', 
        ]);

     }
}

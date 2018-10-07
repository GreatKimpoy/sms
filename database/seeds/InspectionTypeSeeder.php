<?php

use Illuminate\Database\Seeder;

class InspectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inspection_types')->insert([
            'type' => 'Lights',
            'active' => 1
        ]);
        
        DB::table('inspection_types')->insert([
            'type' => 'Tires',
            'active' => 1
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class JobOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('job_orders')->insert([
            'inspection_id' => '1',
            'start' => '2018-10-19', 
            'start_time' => '10:00:00',
            'end' => '',
            'end_time' => '',
            
        ]);
        DB::table('job_orders')->insert([
            'inspection_id' => '2',
            'start' => '2018-09-15',
            'start_time' => '8:00:00',
            'end' => '2018-09-17',
            'end_time' => '5:00:00',
            
        ]);
    }
}

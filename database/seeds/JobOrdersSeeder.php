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
            'jobStart' => '2018-10-19', 
            'jobStart_time' => '10:00:00',
            'start' => '2018-10-19', 
            'start_time' => '10:00:00',
            'end' => '2018-10-22', 
            'end_time' => '17:00:00',
            'progressCount' => '100.00',
            'isStatus' => 1,
            'created_at' => '2018-10-18 10:30:35',
            'updated_at' => '2018-10-18 17:12:55',
        ]);

        DB::table('job_orders')->insert([
            'inspection_id' => '2',
            'jobStart' => '2018-10-09',
            'jobStart_time' => '8:00:00',
            'start' => '2018-10-9', 
            'start_time' => '10:00:00',
            'end' => '2018-10-12', 
            'end_time' => '17:00:00',
            'progressCount' => '100.00',
            'isStatus' => 1,
            'created_at' => '2018-10-10 10:30:35',
            'updated_at' => '2018-10-10 17:12:55',
            
        ]);
    }
}

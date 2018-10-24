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
            'jobStart' => '2018-06-29', 
            'jobStart_time' => '09:00:00',
            'start' => '2018-06-29', 
            'start_time' => '11:00:00',
            'end' => '2018-07-01', 
            'end_time' => '16:00:00',
            'progressCount' => '100.00',
            'isStatus' => 1,
            'isStartEnabled' => 1,
            'isStopEnabled' => 1,
            'created_at' => '2018-10-18 10:30:35',
        ]);

        DB::table('job_orders')->insert([
            'inspection_id' => '2',
            'jobStart' => '2018-10-09',
            'jobStart_time' => '8:00:00',
            'isStartEnabled' => 1,
            'isStopEnabled' => 1,
            'start' => '2018-10-9', 
            'start_time' => '10:00:00',
            'end' => '2018-10-12', 
            'end_time' => '17:00:00',
            'progressCount' => '100.00',
            'isStatus' => 1,
            'created_at' => '2018-09-17 10:05:35',
            'updated_at' => '2018-10-10 17:00:20',
            
        ]);
        DB::table('job_orders')->insert([
            'inspection_id' => '4',
            'jobStart' => '2018-10-15',
            'jobStart_time' => '09:00:00',
            'start' => '2018-10-15', 
            'start_time' => '09:00:00',
            'end' => '2018-10-17', 
            'end_time' => '14:00:00',
            'progressCount' => '100.00',
            'isStatus' => 1,
            'created_at' => '2018-10-15 9:00:00',
            'updated_at' => '2018-10-17 14:00:00',
            
        ]);

        DB::table('job_orders')->insert([
            'inspection_id' => '5',
            'jobStart' => '2018-10-19',
            'jobStart_time' => '11:00:00',
            'start' => '2018-10-19', 
            'start_time' => '11:00:00',
            'end' => '2018-10-20', 
            'end_time' => '14:00:00',
            'progressCount' => '100.00',
            'isStatus' => 1,
            'created_at' => '2018-10-19 11:00:00',
            'updated_at' => '2018-10-20 14:01:00',
            
        ]);
    }
}

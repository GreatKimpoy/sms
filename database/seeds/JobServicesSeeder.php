<?php

use Illuminate\Database\Seeder;

class JobServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('job_services')->insert([
            'service_id' => '2',
            'job_id' => '1',
            'sequence' => '0',
            'isStartEnabled' => '0',
            'isStopEnabled' => '0',

        ]);
        DB::table('job_services')->insert([
            'service_id' => '2',
            'job_id' => '2',
            'sequence' => '5', 
            'isStartEnabled' => '1',
            'isStopEnabled' => '1',

        
            ]);
    }
}

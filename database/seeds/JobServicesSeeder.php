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

        ]);
        DB::table('job_services')->insert([
            'service_id' => '2',
            'job_id' => '2',
            'sequence' => '5', 
        
        ]);

        DB::table('job_services')->insert([
            'service_id' => '4',
            'job_id' => '3',
            'sequence' => '11', 
        
        ]);

        DB::table('job_services')->insert([
            'service_id' => '10',
            'job_id' => '4',
            'sequence' => '10', 
        
        ]);
        DB::table('job_services')->insert([
            'service_id' => '9',
            'job_id' => '5',
            'sequence' => '4', 
        
        ]);

        
    }
}

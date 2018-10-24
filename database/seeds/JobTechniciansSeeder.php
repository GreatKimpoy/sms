<?php

use Illuminate\Database\Seeder;

class JobTechniciansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('job_technicians')->insert([
            'technician_id' => '1',
            'job_id' => '1',
        ]);
        DB::table('job_technicians')->insert([
            'technician_id' => '2',
            'job_id' => '2',
        ]);

        DB::table('job_technicians')->insert([
            'technician_id' => '3',
            'job_id' => '3',
        ]);

        DB::table('job_technicians')->insert([
            'technician_id' => '4',
            'job_id' => '4',
        ]);

        DB::table('job_technicians')->insert([
            'technician_id' => '5',
            'job_id' => '5',
        ]);
        DB::table('job_technicians')->insert([
            'technician_id' => '6',
            'job_id' => '5',
        ]);
    }
}

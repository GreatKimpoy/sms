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
            'technician_id' => '2',
            'job_id' => '1',
        ]);
        DB::table('job_technicians')->insert([
            'technician_id' => '2',
            'job_id' => '2',
        ]);
    }
}

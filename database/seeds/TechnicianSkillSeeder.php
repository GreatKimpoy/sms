<?php

use Illuminate\Database\Seeder;

class TechnicianSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('technician_skills')->insert([
            'technician_id' => 1,
            'category_id' => 5,
        ]);

        DB::table('technician_skills')->insert([
            'technician_id' => 2,
            'category_id' => 4,
        ]);

        DB::table('technician_skills')->insert([
            'technician_id' => 3,
            'category_id' => 3,
        ]);

        DB::table('technician_skills')->insert([
            'technician_id' => 4,
            'category_id' => 5,
        ]);

        DB::table('technician_skills')->insert([
            'technician_id' => 5,
            'category_id' => 2,
        ]);

        DB::table('technician_skills')->insert([
            'technician_id' => 6,
            'category_id' => 1,
        ]);

        DB::table('technician_skills')->insert([
            'technician_id' => 7,
            'category_id' => 4,
        ]);

        DB::table('technician_skills')->insert([
            'technician_id' => 8,
            'category_id' => 3,
        ]);

        DB::table('technician_skills')->insert([
            'technician_id' => 9,
            'category_id' => 2,
        ]);

        DB::table('technician_skills')->insert([
            'technician_id' => 10,
            'category_id' => 1,
        ]);
    }
}

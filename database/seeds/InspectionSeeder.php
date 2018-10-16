<?php

use Illuminate\Database\Seeder;

class InspectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('inspections')->insert([
            'customer_id' => '1',
            'owner_id' => '1',
            'additional_remarks' => '',
        ]);
        DB::table('inspections')->insert([
            'customer_id' => '2',
            'owner_id' => '2',
            'additional_remarks' => '',
        ]);
    }
}

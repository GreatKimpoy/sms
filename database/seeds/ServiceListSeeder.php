<?php

use Illuminate\Database\Seeder;

class ServiceListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_lists')->insert([
            'name' => 'Fuel Injection Repair',
            'category_id' => '1',
            'description' => 'Simulation of the function of fuel injectors.',
            'standard_time' => '2 hours',
        ]);

        DB::table('service_lists')->insert([
            'name' => 'Timing Belt/Fan Belt',
            'category_id' => '1',
            'description' => 'Part of the engine that synchronizes the crankshaft rotation.',
            'standard_time' => '4 hours',
        ]);

        DB::table('service_lists')->insert([
            'name' => 'Air Conditioning Repair',
            'category_id' => '5',
            'description' => 'Recognizing an Air Conditioning issue.',
            'standard_time' => '1 hour',
        ]);

        DB::table('service_lists')->insert([
            'name' => 'Air Conditioning Installation',
            'category_id' => '5',
            'description' => 'New Air Conditioners and AC Replacement Services.',
            'standard_time' => '3 hours',
        ]);

        DB::table('service_lists')->insert([
            'name' => 'Air Conditioning Tune Up',
            'category_id' => '5',
            'description' => 'Air Conditioning Maintenance Services.',
            'standard_time' => '1 hour',
        ]);

        DB::table('service_lists')->insert([
            'name' => 'Batteries',
            'category_id' => '2',
            'description' => 'Keep battery at peak performance.',
            'standard_time' => '1 hours',
        ]);

        DB::table('service_lists')->insert([
            'name' => 'Starters and Alternators',
            'category_id' => '2',
            'description' => 'Turn a cars engine in order to start the engine.',
            'standard_time' => '2 hours',
        ]);

        DB::table('service_lists')->insert([
            'name' => 'Ignition Diagnosis and Repair',
            'category_id' => '2',
            'description' => 'Supply the spark of high voltage.',
            'standard_time' => '4 hours',
        ]);

        DB::table('service_lists')->insert([
            'name' => 'Tire Service',
            'category_id' => '3',
            'description' => 'Tire Service Repair.',
            'standard_time' => '2 hours',
        ]);

        DB::table('service_lists')->insert([
            'name' => 'Wheel Alignments',
            'category_id' => '3',
            'description' => 'Adjustment of vehicle suspension.',
            'standard_time' => '2 hours',
        ]);

        DB::table('service_lists')->insert([
            'name' => 'Shocks and Struts',
            'category_id' => '3',
            'description' => 'Keeps car from bouncing.',
            'standard_time' => '1 hour',
        ]);

        DB::table('service_lists')->insert([
            'name' => 'Oil, Lube and Filter',
            'category_id' => '4',
            'description' => 'Change Oil.',
            'standard_time' => '1 hour',
        ]);

        DB::table('service_lists')->insert([
            'name' => 'Chassis',
            'category_id' => '4',
            'description' => 'Maintain every part of chassis properly.',
            'standard_time' => '3 hours',
        ]);

        DB::table('service_lists')->insert([
            'name' => 'Exhaust',
            'category_id' => '4',
            'description' => 'Maintain vehicle exhaust emission clean.',
            'standard_time' => '1 hour',
        ]);
    }
}

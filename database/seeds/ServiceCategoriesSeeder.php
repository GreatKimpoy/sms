<?php

use Illuminate\Database\Seeder;

class ServiceCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('service_categories')->insert([
            'name' => 'Engine Repair/Service',
            'description' => 'All engine maintenance and repair.',
        ]);
        DB::table('service_categories')->insert([
            'name' => 'Electrical Repair',
            'description' => 'All electrical maintenance and repair.',
        ]);
        DB::table('service_categories')->insert([
            'name' => 'Steering and Suspension',
            'description' => 'Tires sales/service repairs, wheel alignment and Axles.',
        ]);
        DB::table('service_categories')->insert([
            'name' => 'General Repair and Maintenance',
            'description' => 'Industrial Motor Repair.',
        ]);
        DB::table('service_categories')->insert([
            'name' => 'Car Air-conditioning',
            'description' => 'Aircon maintenance and repair.',
        ]);
    }
}

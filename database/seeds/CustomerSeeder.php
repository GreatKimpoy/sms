<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
            'firstname' => 'Lourdes',
            'middlename' => 'Dizon',
            'lastname' => 'Tagulao',
            'Street' => 'Mabuhay Street, Sitio Tubigan',
            'Barangay' => 'Brgy. San Isidro',
            'City' => 'Antipolo City, Rizal',
            'Contact' => '09662372789',
            'Email' => 'odeztagulao@gmail.com',
            
        ]);

        DB::table('customers')->insert([
            'firstname' => 'Armando',
            'middlename' => 'Jacinto',
            'lastname' => 'Canales',
            'Street' => 'Blk. 2 Lot 27, Guava St., Sta. Elena Subdivision',
            'Barangay' => 'Brgy. San Roque',
            'City' => 'Novaliches',
            'Contact' => '0917859216',
            'Email' => 'armandocanales@yahoo.com',
            
        ]);
    }
}

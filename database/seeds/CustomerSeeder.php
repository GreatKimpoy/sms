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
            'street' => 'Mabuhay Street, Sitio Tubigan',
            'barangay' => 'Brgy. San Isidro',
            'city' => 'Antipolo City, Rizal',
            'contact' => '09662372789',
            'email' => 'odeztagulao@gmail.com',
            
        ]);

        DB::table('customers')->insert([
            'firstname' => 'Armando',
            'middlename' => 'Jacinto',
            'lastname' => 'Canales',
            'street' => 'Blk. 2 Lot 27, Guava St., Sta. Elena Subdivision',
            'barangay' => 'Brgy. San Roque',
            'city' => 'Novaliches',
            'contact' => '0917859216',
            'email' => 'armandocanales@yahoo.com',
            
        ]);
    }
}

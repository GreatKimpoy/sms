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
            'created_at' => '2018-06-29',
            
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
            'created_at' => '2018-08-15',
            
        ]);

        DB::table('customers')->insert([
            'firstname' => 'Rene',
            'middlename' => 'Sanggal',
            'lastname' => 'Ferrer',
            'street' => 'Kaginhawaan Street, El Dorado',
            'barangay' => 'Brgy. Inarawan',
            'city' => 'Pasig City',
            'contact' => '09212372759',
            'email' => 'reneserrer@gmail.com',
            'created_at' => '2018-09-17',
            
        ]);

        DB::table('customers')->insert([
            'firstname' => 'Jesus',
            'middlename' => 'Lawis',
            'lastname' => 'Mendoza',
            'street' => 'C. Luisito St., Villacarmen',
            'barangay' => 'Brgy. Kalinawan',
            'city' => 'Malabon City',
            'contact' => '09212324723',
            'email' => 'jessmendoza@yahoo.com',
            'created_at' => '2018-10-15',
            
        ]);

        DB::table('customers')->insert([
            'firstname' => 'Mylan',
            'middlename' => 'Tomas',
            'lastname' => 'Dela Cruz',
            'street' => 'C. Luisito St., Villacarmen',
            'barangay' => 'Brgy. Kalinawan',
            'city' => 'Malabon City',
            'contact' => '09162324813',
            'email' => 'mylandc@yahoo.com',
            'created_at' => '2018-10-19',
            
        ]);
    }
}

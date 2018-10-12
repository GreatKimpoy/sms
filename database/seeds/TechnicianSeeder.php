<?php

use Illuminate\Database\Seeder;

class TechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('technicians')->insert([
            'firstname' => 'Isidro',
            'middlename' => 'Astejada',
            'lastname' => 'Sevilla',
            'street' => 'Phase 4 Olympias Street',
            'barangay' => 'Barangay San Isidro',
            'city' => 'Cainta, Rizal',
            'birthdate' => '1988/10/09',
            'contact' => '09777495016',
            'email' => 'isidrosevilla@gmail.com',
            'image' => 'default_profile_img.png	',
        ]);

       DB::table('technicians')->insert([
            'firstname' => 'Cesar',
            'middlename' => 'Inlayo',
            'lastname' => 'Mendoza',
            'street' => 'Susana Rsidences, Mayor Is Diaz Streeet',
            'barangay' => 'Barangay San Martin De Porres',
            'city' => 'Cubao, Quezon City',
            'birthdate' => '1989/10/18',
            'contact' => '09151362676',
            'email' => 'cesarim@gmail.com',
            'image' => 'default_profile_img.png	',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'Luisito',
            'middlename' => 'Aguinaldo',
            'lastname' => 'Corpuz',
            'street' => '544 Gov. A. Pascual Street',
            'barangay' => 'Barangay San Roque',
            'city' => 'Navotas City',
            'birthdate' => '1988/10/29',
            'contact' => '0917856312',
            'email' => 'LACorpuz@gmail.com',
            'image' => 'default_profile_img.png	',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'Aaron',
            'middlename' => 'Pardinez',
            'lastname' => 'Adolfo',
            'street' => '#74 Jasmine St., San Antonio Village',
            'barangay' => 'Barangay Dalig',
            'city' => 'Antipolo, Rizal',
            'birthdate' => '1988/08/17',
            'contact' => '09662372780',
            'email' => 'APardinzAdolf@gmail.com',
            'image' => 'default_profile_img.png	',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'Kelvin',
            'middlename' => 'Dela Cruz',
            'lastname' => 'Morfe',
            'street' => 'Archimedes Street',
            'barangay' => 'Barangay Manggahan',
            'city' => 'Pasig City',
            'birthdate' => '1978/03/21',
            'contact' => '09287615672',
            'email' => 'kelvin32178@yahoo.com',
            'image' => 'default_profile_img.png',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'Selwyn John',
            'middlename' => 'Abrejica',
            'lastname' => 'Brion',
            'street' => '1st Street',
            'barangay' => 'Barangay 168',
            'city' => 'Caloocan City',
            'birthdate' => '1988/08/28',
            'contact' => '09989397351',
            'email' => 'notnot.chico@gmail.com',
            'image' => 'default_profile_img.png',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'Franz',
            'middlename' => 'Eveste',
            'lastname' => 'Espocia',
            'street' => 'Nipas Drive',
            'barangay' => 'Barangay Balonbato',
            'city' => 'Quezon City',
            'birthdate' => '1989/10/20',
            'contact' => '09500650103',
            'email' => 'FranzExpoxia@yahoo.com',
            'image' => 'default_profile_img.png',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'Francis Paulo',
            'middlename' => 'Reyes',
            'lastname' => 'Reniva',
            'street' => '31-D G.L. Jaena Street',
            'barangay' => 'Barangay West Rembo',
            'city' => 'Makati City',
            'birthdate' => '1989/12/18',
            'contact' => '09218038667',
            'email' => 'paureyesreni@gmail.com',
            'image' => 'default_profile_img.png',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'Troy',
            'middlename' => 'Gracia',
            'lastname' => 'Borbonga',
            'street' => '50 star',
            'barangay' => 'Barangay Poblacion',
            'city' => 'Mandaluyong City',
            'birthdate' => '1989/08/20',
            'contact' => '09219366158',
            'email' => 'TroyGBorbonga@gmail.com',
            'image' => 'default_profile_img.png',
        ]);
      
        DB::table('technicians')->insert([
            'firstname' => 'Mikko',
            'middlename' => 'Florentino',
            'lastname' => 'Malalad',
            'street' => 'Mabini Street',
            'barangay' => 'Barangay Manggahan',
            'city' => 'Pasig City',
            'birthdate' => '1988/07/22',
            'contact' => '09176430962',
            'email' => 'malalad_mikko@gmail.com',
            'image' => 'default_profile_img.png',
        ]);

    }
}

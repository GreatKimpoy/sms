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
            'firstName' => 'Isidro',
            'middleName' => 'Astejada',
            'lastName' => 'Sevilla',
            'Street' => 'Phase 4 Olympias Street',
            'Barangay' => 'Barangay San Isidro',
            'City' => 'Cainta, Rizal',
            'Birthdate' => '1988/10/09',
            'Contact' => '09777495016',
            'Email' => 'isidrosevilla@gmail.com',
            'image' => 'default_profile_img.png	',
        ]);

       DB::table('technicians')->insert([
            'firstName' => 'Cesar',
            'middleName' => 'Inlayo',
            'lastName' => 'Mendoza',
            'Street' => 'Susana Rsidences, Mayor Is Diaz Streeet',
            'Barangay' => 'Barangay San Martin De Porres',
            'City' => 'Cubao, Quezon City',
            'Birthdate' => '1989/10/18',
            'Contact' => '09151362676',
            'Email' => 'cesarim@gmail.com',
            'image' => 'default_profile_img.png	',
        ]);

        DB::table('technicians')->insert([
            'firstName' => 'Luisito',
            'middleName' => 'Aguinaldo',
            'lastName' => 'Corpuz',
            'Street' => '544 Gov. A. Pascual Street',
            'Barangay' => 'Barangay San Roque',
            'City' => 'Navotas City',
            'Birthdate' => '1988/10/29',
            'Contact' => '0917856312',
            'Email' => 'LACorpuz@gmail.com',
            'image' => 'default_profile_img.png	',
        ]);

        DB::table('technicians')->insert([
            'firstName' => 'Aaron',
            'middleName' => 'Pardinez',
            'lastName' => 'Adolfo',
            'Street' => '#74 Jasmine St., San Antonio Village',
            'Barangay' => 'Barangay Dalig',
            'City' => 'Antipolo, Rizal',
            'Birthdate' => '1988/08/17',
            'Contact' => '09662372780',
            'Email' => 'APardinzAdolf@gmail.com',
            'image' => 'default_profile_img.png	',
        ]);

        DB::table('technicians')->insert([
            'firstName' => 'Kelvin',
            'middleName' => 'Dela Cruz',
            'lastName' => 'Morfe',
            'Street' => 'Archimedes Street',
            'Barangay' => 'Barangay Manggahan',
            'City' => 'Pasig City',
            'Birthdate' => '1978/03/21',
            'Contact' => '09287615672',
            'Email' => 'kelvin32178@yahoo.com',
            'image' => 'default_profile_img.png',
        ]);

        DB::table('technicians')->insert([
            'firstName' => 'Selwyn John',
            'middleName' => 'Abrejica',
            'lastName' => 'Brion',
            'Street' => '1st Street',
            'Barangay' => 'Barangay 168',
            'City' => 'Caloocan City',
            'Birthdate' => '1988/08/28',
            'Contact' => '09989397351',
            'Email' => 'notnot.chico@gmail.com',
            'image' => 'default_profile_img.png',
        ]);

        DB::table('technicians')->insert([
            'firstName' => 'Franz',
            'middleName' => 'Eveste',
            'lastname' => 'Espocia',
            'Street' => 'Nipas Drive',
            'Barangay' => 'Barangay Balonbato',
            'City' => 'Quezon City',
            'Birthdate' => '1989/10/20',
            'Contact' => '09500650103',
            'Email' => 'FranzExpoxia@yahoo.com',
            'image' => 'default_profile_img.png',
        ]);

        DB::table('technicians')->insert([
            'firstName' => 'Francis Paulo',
            'middleName' => 'Reyes',
            'lastname' => 'Reniva',
            'Street' => '31-D G.L. Jaena Street',
            'Barangay' => 'Barangay West Rembo',
            'City' => 'Makati City',
            'Birthdate' => '1989/12/18',
            'Contact' => '09218038667',
            'Email' => 'paureyesreni@gmail.com',
            'image' => 'default_profile_img.png',
        ]);

        DB::table('technicians')->insert([
            'firstName' => 'Troy',
            'middleName' => 'Gracia',
            'lastName' => 'Borbonga',
            'Street' => '50 star',
            'Barangay' => 'Barangay Poblacion',
            'City' => 'Mandaluyong City',
            'Birthdate' => '1989/08/20',
            'Contact' => '09219366158',
            'Email' => 'TroyGBorbonga@gmail.com',
            'image' => 'default_profile_img.png',
        ]);
      
        DB::table('technicians')->insert([
            'firstName' => 'Mikko',
            'middleName' => 'Florentino',
            'lastName' => 'Malalad',
            'Street' => 'Mabini Street',
            'Barangay' => 'Barangay Manggahan',
            'City' => 'Pasig City',
            'Birthdate' => '1988/07/22',
            'Contact' => '09176430962',
            'Email' => 'malalad_mikko@gmail.com',
            'image' => 'default_profile_img.png',
        ]);

    }
}

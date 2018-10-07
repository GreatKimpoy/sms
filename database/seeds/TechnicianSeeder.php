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
            'firstname' => 'Trisha Claire',
            'middlename' => 'Serrano',
            'lastname' => 'Abanador',
            'street' => 'Phase 4 Olympias Street',
            'barangay' => 'Barangay San Isidro',
            'city' => 'Cainta, Rizal',
            'birthdate' => '1988/10/09',
            'contact' => '09777495016',
            'email' => 'tcabanador@gmail.com',
            'image' => 'default_profile_img.png	',
        ]);

       DB::table('technicians')->insert([
            'firstname' => 'Eliakim',
            'middlename' => 'Del Pozo',
            'lastname' => 'Urian',
            'street' => 'Susana Rsidences, Mayor Is Diaz Streeet',
            'barangay' => 'Barangay San Martin De Porres',
            'city' => 'Cubao, Quezon City',
            'birthdate' => '1989/10/18',
            'contact' => '09151362676',
            'email' => 'eliakimurian@gmail.com',
            'image' => 'default_profile_img.png	',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'Earnest John',
            'middlename' => 'Amblon',
            'lastname' => 'Gungon',
            'street' => '544 Gov. A. Pascual Street',
            'barangay' => 'Barangay San Roque',
            'city' => 'Navotas City',
            'birthdate' => '1988/10/29',
            'contact' => '0917856312',
            'email' => 'eliakimurian@gmail.com',
            'image' => 'default_profile_img.png	',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'Sid Emmanuel',
            'middlename' => 'Dulos',
            'lastname' => 'Damaso',
            'street' => '#74 Jasmine St., San Antonio Village',
            'barangay' => 'Barangay Dalig',
            'city' => 'Antipolo, Rizal',
            'birthdate' => '1988/08/17',
            'contact' => '09662372780',
            'email' => 'emmanueldamaso@gmail.com',
            'image' => 'default_profile_img.png	',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'John Daniel',
            'middlename' => 'Bentula',
            'lastname' => 'Marcelo',
            'street' => 'Archimedes Street',
            'barangay' => 'Barangay Manggahan',
            'city' => 'Pasig City',
            'birthdate' => '1978/03/21',
            'contact' => '09287615672',
            'email' => 'jdbentula@gmail.com',
            'image' => 'default_profile_img.png',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'Dustin John',
            'middlename' => 'Leron',
            'lastname' => 'Alpasar',
            'street' => '1st Street',
            'barangay' => 'Barangay 168',
            'city' => 'Caloocan City',
            'birthdate' => '1988/08/28',
            'contact' => '09989397351',
            'email' => 'notnot.chico@gmail.com',
            'image' => 'default_profile_img.png',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'Ike',
            'middlename' => 'Ferolino',
            'lastname' => 'Tag-at',
            'street' => 'Nipas Drive',
            'barangay' => 'Barangay Balonbato',
            'city' => 'Quezon City',
            'birthdate' => '1989/10/20',
            'contact' => '09500650103',
            'email' => 'iketagat@gmail.com',
            'image' => 'default_profile_img.png',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'Janelle Joy',
            'middlename' => 'Reyes',
            'lastname' => 'Gabat',
            'street' => '31-D G.L. Jaena Street',
            'barangay' => 'Barangay West Rembo',
            'city' => 'Makati City',
            'birthdate' => '1989/12/18',
            'contact' => '09218038667',
            'email' => 'janellejoygabat@gmail.com',
            'image' => 'default_profile_img.png',
        ]);

        DB::table('technicians')->insert([
            'firstname' => 'Jan Lexly',
            'middlename' => 'Medina',
            'lastname' => 'Cortez',
            'street' => '50 star',
            'barangay' => 'Barangay Poblacion',
            'city' => 'Mandaluyong City',
            'birthdate' => '1989/08/20',
            'contact' => '09219366158',
            'email' => 'lexlycortez10@gmail.com',
            'image' => 'default_profile_img.png',
        ]);
      
        DB::table('technicians')->insert([
            'firstname' => 'Erica Mae',
            'middlename' => 'Flores',
            'lastname' => 'Campos',
            'street' => 'Mabini Street',
            'barangay' => 'Barangay Manggahan',
            'city' => 'Pasig City',
            'birthdate' => '1988/07/22',
            'contact' => '09176430962',
            'email' => 'camposericamaef@gmail.com',
            'image' => 'default_profile_img.png',
        ]);

    }
}

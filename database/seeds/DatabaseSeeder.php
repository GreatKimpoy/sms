<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 
        $this->call(UserSeeder::class);
        $this->call(VehicleModelSeeder::class);
        $this->call(ServiceCategoriesSeeder::class);
        $this->call(ServiceListSeeder::class);
        $this->call(VehiclePartSeeder::class);
        $this->call(ServicePartSeeder::class);
        $this->call(TechnicianSeeder::class);
        $this->call(TechnicianSkillSeeder::class);        
        $this->call(InspectionTypeSeeder::class);
        $this->call(InspectionItemSeeder::class);
        $this->call(StepSeeder::class);
      //  $this->call(VehicleOwnersSeeder::class);
      //  $this->call(CustomerSeeder::class);
      //  $this->call(InspectionSeeder::class);
      //  $this->call(InspectionHeaderSeeder::class);
      //  $this->call(InspectionServiceSeeder::class);
      //  $this->call(InspectionTechnicianSeeder::class);
      //  $this->call(JobOrdersSeeder::class);
      //  $this->call(JobServicesSeeder::class);
      //  $this->call(JobTechniciansSeeder::class);

       // $this->call(CustomerSeeder::class);
       // $this->call(InspectionsSeeder::class);
        

    }
}

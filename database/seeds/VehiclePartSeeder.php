<?php

use Illuminate\Database\Seeder;

class VehiclePartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        DB::table('vehicle_parts')->insert([
            'number' => '22030',
            'vehicle_id' => '1',

            'description' => 'BODY ASSY, THROTTLE W/MOTOR',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '22271',
            'vehicle_id' => '1',

            'description' => 'Duct Sub-Assy, Heater to Register, Center',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90105-06202', 
            'vehicle_id' => '1',

            'description' => 'BOLT(FOR CYLINDER HEAD COVER)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '94151-80600',
            'vehicle_id' => '1',

            'description' => 'NUT, CAP(FOR CYLINDER HEAD COVER)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91621-60614',
            'vehicle_id' => '1',

            'description' => 'BOLT (FOR BREATHER OIL DEFLECTOR) ',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91671-80614',
            'vehicle_id' => '1',

            'description' => 'BOLT (FOR TRANSMISSION CONTROL CABLE BRACKET)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91511-J0840',
            'vehicle_id' => '1',

            'description' => '	BOLT(FOR ALTERNATOR)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91551-80840',
            'vehicle_id' => '1',

            'description' => 'BOLT(FOR HEAD TO CAMSHAFT BEARING CAP)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23250',
            'vehicle_id' => '1',

            'description' => 'INJECTOR ASSY, FUEL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23250B',
            'vehicle_id' => '1',

            'description' => 'RING, O(FOR FUEL INJECTOR)',
        ]);
        
        DB::table('vehicle_parts')->insert([
            'number' => '23291',
            'vehicle_id' => '1',
 
            'description' => 'INSULATOR, INJECTOR VIBRATION',
        ]);
        
        DB::table('vehicle_parts')->insert([
            'number' => '23842A',
            'vehicle_id' => '1',

            'description' => 'CLAMP, FUEL PIPE, 2 (FOR EFI)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23841B',
            'vehicle_id' => '1',

            'description' => 'CLAMP, FUEL PIPE, 1 (FOR EFI)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23807V',
            'vehicle_id' => '1',

            'description' => 'SPACER, 1 (FOR DELIVERY PIPE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23807',
            'vehicle_id' => '1',

            'description' => 'PIPE SUB-ASSY, FUEL DELIVERY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23901',
            'vehicle_id' => '1',
 
            'description' => 'TUBE SUB-ASSY, FUEL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13523',
            'vehicle_id' => '1',

            'description' => 'GEAR OR SPROCKET, CAMSHAFT TIMING',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13540',
            'vehicle_id' => '1',

            'description' => 'TENSIONER ASSY, CHAIN, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13559',
            'vehicle_id' => '1',

            'description' => 'SLIPPER, CHAIN TENSIONER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13050',
            'vehicle_id' => '1',

            'description' => 'GEAR ASSY, CAMSHAFT TIMING',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13506',
            'vehicle_id' => '1',

            'description' => 'CHAIN SUB-ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91551-80625',
            'vehicle_id' => '1',
            'description' => 'BOLT(FOR CAMSHAFT HOUSING SET)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13734',
            'vehicle_id' => '1',
            'description' => 'SEAT, VALVE SPRING',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13511',
            'vehicle_id' => '1',
            'description' => 'CAMSHAFT',
        ]);
        DB::table('vehicle_parts')->insert([
            'number' => '13741A',
            'vehicle_id' => '1',
            'description' => 'LOCK, VALVE SPRING RETAINER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13741',
            'vehicle_id' => '1',
            'description' => 'RETAINER, VALVE SPRING',
        ]);
        
        DB::table('vehicle_parts')->insert([
            'number' => '13711C',
            'vehicle_id' => '1',
            'description' => 'SPRING, COMPRESSION(FOR OUTER)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13711A',
            'vehicle_id' => '1',
            'description' => 'SEAL OR RING, O(FOR VALVE STEM OIL)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13715',
            'vehicle_id' => '1',
            'description' => 'VALVE, EXHAUST',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13561',
            'vehicle_id' => '1',
            'description' => 'DAMPER, CHAIN VIBRATION, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13711',
            'vehicle_id' => '1',
            
            'description' => 'VALVE, INTAKE',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13751',
            'vehicle_id' => '1',
            
            'description' => 'LIFTER, VALVE',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '16361A',
            'vehicle_id' => '1',
            
            'description' => 'BELT, V(FOR FAN & ALTERNATOR)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55901',
            'vehicle_id' => '1',
            
            'description' => 'BASE SUB-ASSY, HEATER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55910B',
            'vehicle_id' => '1',
            
            'description' => 'BULB, HEATER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55905B',
            'vehicle_id' => '1',
            
            'description' => 'KNOB, HEATER CONTROL, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55902B',
            'vehicle_id' => '1',
            
            'description' => 'CONTROL SUB-ASSY, HEATER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55906A',
            'vehicle_id' => '1',
            
            'description' => 'CABLE SUB-ASSY, DEFROSTER DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55908A',
            'vehicle_id' => '1',
             
            'description' => 'CABLE SUB-ASSY, AIR INLET DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55909A',
            'vehicle_id' => '1',
            
            'description' => 'CABLE SUB-ASSY, AIRMIX DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87211',
            'vehicle_id' => '1',

            'description' => 'DUCT, AIR, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87211A',
            'vehicle_id' => '1',

            'description' => 'DUCT, AIR, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55843A',
            'vehicle_id' => '1',

            'description' => 'DUCT, HEATER TO REGISTER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55844',
            'vehicle_id' => '1',

            'description' => 'DUCT, HEATER TO REGISTER, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87201A',
            'vehicle_id' => '1',

            'description' => 'DUCT SUB-ASSY, AIR',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55950G',
            'vehicle_id' => '1',

            'description' => 'NOZZLE ASSY, DEFROSTER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55840C',
            'vehicle_id' => '1',

            'description' => 'DUCT ASSY, HEATER TO REGISTER, NO.6',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88790B',
            'vehicle_id' => '1',

            'description' => 'THERMISTOR ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88706A',
            'vehicle_id' => '1',

            'description' => 'TUBE SUB-ASSY, LIQUID, A',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88711',
            'vehicle_id' => '1',

            'description' => 'HOSE, COOLER REFRIGERANT DISCHARGE, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88712B',
            'vehicle_id' => '1',

            'description' => 'HOSE, COOLER REFRIGERANT SUCTION',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88375D',
            'vehicle_id' => '1',

            'description' => 'CAP, SERVICE VALVE, NO.2',
        ]);

         DB::table('vehicle_parts')->insert([
            'number' => '88375B',
            'vehicle_id' => '1',

            'description' => 'CAP, SERVICE VALVE, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88374B',
            'vehicle_id' => '1',

            'description' => 'VALVE, SERVICE, NO.1',

        ]);
        DB::table('vehicle_parts')->insert([
            'number' => '88374C',
            'vehicle_id' => '1',

            'description' => 'VALVE, SERVICE, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88891H',
            'vehicle_id' => '1',
            
            'description' => 'COVER, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90467-07164',
            'vehicle_id' => '1',
            
            'description' => 'CLIP',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88460',
            'vehicle_id' => '1',
            
            'description' => 'CONDENSER ASSY, COOLER', 
        ]); 

        DB::table('vehicle_parts')->insert([
            'number' => '88474',
            'vehicle_id' => '1',
            
            'description' => 'DRYER, COOLER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88718-0D310',
            'vehicle_id' => '1',
            
            'description' => 'CLAMP(FOR COOLER REFRIGERANT PIPE), NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14120',
            'vehicle_id' => '1',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14119',
            'vehicle_id' => '1',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14121',
            'vehicle_id' => '1',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88310',
            'vehicle_id' => '1',
            
            'description' => 'COMPRESSOR ASSY, W/PULLEY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87103B',
            'vehicle_id' => '1',
            
            'description' => 'MOTOR SUB-ASSY, BLOWER W/FAN',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87130D',
            'vehicle_id' => '1',
            
            'description' => 'BLOWER ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88515',
            'vehicle_id' => '1',
            
            'description' => 'VALVE, COOLER EXPANSION',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88625',
            'vehicle_id' => '1',
            
            'description' => 'THERMISTOR, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88650E',
            'vehicle_id' => '1',
            
            'description' => 'AMPLIFIER ASSY, AIR CONDITIONER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88548B',
            'vehicle_id' => '1',
            
            'description' => 'CASE, AIR FILTER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87050',
            'vehicle_id' => '1',
            
            'description' => 'RADIATOR ASSY, AIR CONDITIONER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88539J',
            'vehicle_id' => '1',
            
            'description' => 'HOSE, DRAIN COOLER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87138C',
            'vehicle_id' => '1',
            
            'description' => 'RESISTOR, BLOWER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87124B',
            'vehicle_id' => '1',
            
            'description' => 'CLAMP, HEATER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88501',
            'vehicle_id' => '1',
            
            'description' => 'EVAPORATOR SUB-ASSY, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-04542',
            'vehicle_id' => '1',
            
            'description' => 'BOLT(FOR COOLER EXPANSION VALVE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14120',
            'vehicle_id' => '1',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14119',
            'vehicle_id' => '1',
              
            'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14121',
            'vehicle_id' => '1',
              
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
        ]);

        //------------------------------------------------------service id 4 ------------------------------------------------------
        DB::table('vehicle_parts')->insert([
            'number' => '55901',
            'vehicle_id' => '1',
            
            'description' => 'BASE SUB-ASSY, HEATER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55910B',
            'vehicle_id' => '1',
            
            'description' => 'BULB, HEATER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55905B',
            'vehicle_id' => '1',
            
            'description' => 'KNOB, HEATER CONTROL, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55902B',
            'vehicle_id' => '1',
            
            'description' => 'CONTROL SUB-ASSY, HEATER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55906A',
            'vehicle_id' => '1',
            
            'description' => 'CABLE SUB-ASSY, DEFROSTER DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55908A',
            'vehicle_id' => '1',
             
            'description' => 'CABLE SUB-ASSY, AIR INLET DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55909A',
            'vehicle_id' => '1',
            
            'description' => 'CABLE SUB-ASSY, AIRMIX DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87211',
            'vehicle_id' => '1',
            
            'description' => 'DUCT, AIR, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87211A',
            'vehicle_id' => '1',
            
            'description' => 'DUCT, AIR, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55843A',
            'vehicle_id' => '1',
            
            'description' => 'DUCT, HEATER TO REGISTER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55844',
            'vehicle_id' => '1',
            
            'description' => 'DUCT, HEATER TO REGISTER, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87201A',
            'vehicle_id' => '1',
            
            'description' => 'DUCT SUB-ASSY, AIR',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55950G',
            'vehicle_id' => '1',
            
            'description' => 'NOZZLE ASSY, DEFROSTER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55840C',
            'vehicle_id' => '1',
            
            'description' => 'DUCT ASSY, HEATER TO REGISTER, NO.6',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88790B',
            'vehicle_id' => '1',
            
            'description' => 'THERMISTOR ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88706A',
            'vehicle_id' => '1',
            
            'description' => 'TUBE SUB-ASSY, LIQUID, A',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88711',
            'vehicle_id' => '1',
             
            'description' => 'HOSE, COOLER REFRIGERANT DISCHARGE, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88712B',
            'vehicle_id' => '1',
            
            'description' => 'HOSE, COOLER REFRIGERANT SUCTION',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88375D',
            'vehicle_id' => '1',
            
            'description' => 'CAP, SERVICE VALVE, NO.2',
        ]);

         DB::table('vehicle_parts')->insert([
            'number' => '88375B',
            'vehicle_id' => '1',
            
            'description' => 'CAP, SERVICE VALVE, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88374B',
            'vehicle_id' => '1',
            
            'description' => 'VALVE, SERVICE, NO.1',

        ]);
        DB::table('vehicle_parts')->insert([
            'number' => '88374C',
            'vehicle_id' => '1',
            
            'description' => 'VALVE, SERVICE, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88891H',
            'vehicle_id' => '1',
            
            'description' => 'COVER, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90467-07164',
            'vehicle_id' => '1',
            
            'description' => 'CLIP',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88460',
            'vehicle_id' => '1',
            
            'description' => 'CONDENSER ASSY, COOLER', 
        ]); 

        DB::table('vehicle_parts')->insert([
            'number' => '88474',
            'vehicle_id' => '1',
            
            'description' => 'DRYER, COOLER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88718-0D310',
            'vehicle_id' => '1',
            
            'description' => 'CLAMP(FOR COOLER REFRIGERANT PIPE), NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14120',
            'vehicle_id' => '1',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14119',
            'vehicle_id' => '1',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14121',
            'vehicle_id' => '1',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88310',
            'vehicle_id' => '1',
            
            'description' => 'COMPRESSOR ASSY, W/PULLEY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87103B',
            'vehicle_id' => '1',
            
            'description' => 'MOTOR SUB-ASSY, BLOWER W/FAN',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87130D',
            'vehicle_id' => '1',
            
            'description' => 'BLOWER ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88515',
            'vehicle_id' => '1',
            
            'description' => 'VALVE, COOLER EXPANSION',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88625',
            'vehicle_id' => '1',
            
            'description' => 'THERMISTOR, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88650E',
            'vehicle_id' => '1',
            
            'description' => 'AMPLIFIER ASSY, AIR CONDITIONER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88548B',
            'vehicle_id' => '1',
            
            'description' => 'CASE, AIR FILTER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87050',
            'vehicle_id' => '1',
            
            'description' => 'RADIATOR ASSY, AIR CONDITIONER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88539J',
            'vehicle_id' => '1',
            
            'description' => 'HOSE, DRAIN COOLER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87138C',
            'vehicle_id' => '1',
            
            'description' => 'RESISTOR, BLOWER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87124B',
            'vehicle_id' => '1',
            
            'description' => 'CLAMP, HEATER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88501',
            'vehicle_id' => '1',
            
            'description' => 'EVAPORATOR SUB-ASSY, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-04542',
            'vehicle_id' => '1',
            
            'description' => 'BOLT(FOR COOLER EXPANSION VALVE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14120',
            'vehicle_id' => '1',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14119',
            'vehicle_id' => '1',
              
            'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14121',
            'vehicle_id' => '1',
              
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
        ]);
        
      //------------------------------------------------------service id 5------------------------------------------------------  
      DB::table('vehicle_parts')->insert([
        'number' => '55901',
        'vehicle_id' => '1',
        
        'description' => 'BASE SUB-ASSY, HEATER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55910B',
        'vehicle_id' => '1',
        
        'description' => 'BULB, HEATER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55905B',
        'vehicle_id' => '1',
        
        'description' => 'KNOB, HEATER CONTROL, NO.2',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55902B',
        'vehicle_id' => '1',
        
        'description' => 'CONTROL SUB-ASSY, HEATER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55906A',
        'vehicle_id' => '1',
        
        'description' => 'CABLE SUB-ASSY, DEFROSTER DAMPER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55908A',
        'vehicle_id' => '1',
         
        'description' => 'CABLE SUB-ASSY, AIR INLET DAMPER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55909A',
        'vehicle_id' => '1',
        
        'description' => 'CABLE SUB-ASSY, AIRMIX DAMPER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87211',
        'vehicle_id' => '1',
        
        'description' => 'DUCT, AIR, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87211A',
        'vehicle_id' => '1',
        
        'description' => 'DUCT, AIR, NO.2',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55843A',
        'vehicle_id' => '1',
        
        'description' => 'DUCT, HEATER TO REGISTER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55844',
        'vehicle_id' => '1',
        
        'description' => 'DUCT, HEATER TO REGISTER, NO.2',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87201A',
        'vehicle_id' => '1',
        
        'description' => 'DUCT SUB-ASSY, AIR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55950G',
        'vehicle_id' => '1',
        
        'description' => 'NOZZLE ASSY, DEFROSTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55840C',
        'vehicle_id' => '1',
        
        'description' => 'DUCT ASSY, HEATER TO REGISTER, NO.6',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88790B',
        'vehicle_id' => '1',
        
        'description' => 'THERMISTOR ASSY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88706A',
        'vehicle_id' => '1',
        
        'description' => 'TUBE SUB-ASSY, LIQUID, A',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88711',
        'vehicle_id' => '1',
         
        'description' => 'HOSE, COOLER REFRIGERANT DISCHARGE, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88712B',
        'vehicle_id' => '1',
        
        'description' => 'HOSE, COOLER REFRIGERANT SUCTION',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88375D',
        'vehicle_id' => '1',
        
        'description' => 'CAP, SERVICE VALVE, NO.2',
    ]);

     DB::table('vehicle_parts')->insert([
        'number' => '88375B',
        'vehicle_id' => '1',
        
        'description' => 'CAP, SERVICE VALVE, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88374B',
        'vehicle_id' => '1',
        
        'description' => 'VALVE, SERVICE, NO.1',

    ]);
    DB::table('vehicle_parts')->insert([
        'number' => '88374C',
        'vehicle_id' => '1',
        
        'description' => 'VALVE, SERVICE, NO.2',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88891H',
        'vehicle_id' => '1',
        
        'description' => 'COVER, COOLER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90467-07164',
        'vehicle_id' => '1',
        
        'description' => 'CLIP',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88460',
        'vehicle_id' => '1',
        
        'description' => 'CONDENSER ASSY, COOLER', 
    ]); 

    DB::table('vehicle_parts')->insert([
        'number' => '88474',
        'vehicle_id' => '1',
        
        'description' => 'DRYER, COOLER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88718-0D310',
        'vehicle_id' => '1',
        
        'description' => 'CLAMP(FOR COOLER REFRIGERANT PIPE), NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14120',
        'vehicle_id' => '1',
        
        'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14119',
        'vehicle_id' => '1',
        
        'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14121',
        'vehicle_id' => '1',
        
        'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88310',
        'vehicle_id' => '1',
        
        'description' => 'COMPRESSOR ASSY, W/PULLEY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87103B',
        'vehicle_id' => '1',
        
        'description' => 'MOTOR SUB-ASSY, BLOWER W/FAN',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87130D',
        'vehicle_id' => '1',
        
        'description' => 'BLOWER ASSY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88515',
        'vehicle_id' => '1',
        
        'description' => 'VALVE, COOLER EXPANSION',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88625',
        'vehicle_id' => '1',
        
        'description' => 'THERMISTOR, COOLER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88650E',
        'vehicle_id' => '1',
        
        'description' => 'AMPLIFIER ASSY, AIR CONDITIONER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88548B',
        'vehicle_id' => '1',
        
        'description' => 'CASE, AIR FILTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87050',
        'vehicle_id' => '1',
        
        'description' => 'RADIATOR ASSY, AIR CONDITIONER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88539J',
        'vehicle_id' => '1',
        
        'description' => 'HOSE, DRAIN COOLER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87138C',
        'vehicle_id' => '1',
        
        'description' => 'RESISTOR, BLOWER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87124B',
        'vehicle_id' => '1',
        
        'description' => 'CLAMP, HEATER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88501',
        'vehicle_id' => '1',
        
        'description' => 'EVAPORATOR SUB-ASSY, COOLER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-04542',
        'vehicle_id' => '1',
        
        'description' => 'BOLT(FOR COOLER EXPANSION VALVE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14120',
        'vehicle_id' => '1',
        
        'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14119',
        'vehicle_id' => '1',
          
        'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14121',
        'vehicle_id' => '1',
          
        'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
    ]);
    DB::table('vehicle_parts')->insert([
        'number' => '28800J',
        'vehicle_id' => '1',
        
        'description' => 'TERMINAL, BATTERY NEGATIVE',
    ]);
    
    DB::table('vehicle_parts')->insert([
        'number' => '28800A',
        'vehicle_id' => '1',
        
        'description' => 'TERMINAL, BATTERY POSITIVE',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28800',
        'vehicle_id' => '1',
        
        'description' => 'BATTERY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90178-T0019',
        'vehicle_id' => '1',
        
        'description' => 'NUT (FOR TRANSMISSION CONTROL CABLE)',
    ]);
    
    DB::table('vehicle_parts')->insert([
        'number' => '27330',
        'vehicle_id' => '1',
        
        'description' => 'ROTOR ASSY, ALTERNATOR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27020',
        'vehicle_id' => '1',
        
        'description' => 'ALTERNATOR ASSY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27370A',
        'vehicle_id' => '1',
        
        'description' => 'HOLDER ASSY, ALTERNATOR BRUSH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27360',
        'vehicle_id' => '1',
        
        'description' => 'COIL ASSY, ALTERNATOR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27039',
        'vehicle_id' => '1',
        
        'description' => 'COVER, ALTERNATOR REAR END',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27020E',
        'vehicle_id' => '1',
        
        'description' => 'BOLT(FOR ALTERNATOR)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '16381D',
        'vehicle_id' => '1',
        
        'description' => 'BAR, FAN BELT ADJUSTING',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27310',
        'vehicle_id' => '1',
        
        'description' => 'FRAME ASSY, DRIVE END, ALTERNATOR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90068-00022',
        'vehicle_id' => '1',
        
        'description' => 'SCREW(FOR ALTERNATOR DRIVE END FRAME)',
    ]);
    DB::table('vehicle_parts')->insert([
        'number' => '90068-04046',
        'vehicle_id' => '1',
        
        'description' => 'BOLT(FOR ALTERNATOR REAR END COVER)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90068-00023',
        'vehicle_id' => '1',
        
        'description' => 'SCREW(FOR ALTERNATOR BRUSH HOLDER)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27312',
        'vehicle_id' => '1',
        
        'description' => 'PLATE, RETAINER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27310B',
        'vehicle_id' => '1',
        
        'description' => 'BEARING(FOR ALTERNATOR DRIVE END FRAME)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27384',
        'vehicle_id' => '1',
        
        'description' => 'WASHER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27446A',
        'vehicle_id' => '1',
        
        'description' => 'CLAMP',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27411',
        'vehicle_id' => '1',
        
        'description' => 'PULLEY, ALTERNATOR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27387B',
        'vehicle_id' => '1',
        
        'description' => '	INSULATOR, ALTERNATOR TERMINAL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90068-05009',
        'vehicle_id' => '1',
        
        'description' => 'NUT(FOR ALTERNATOR PULLEY)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28100',
        'vehicle_id' => '1',
        
        'description' => 'STARTER ASSY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28011',
        'vehicle_id' => '1',
        
        'description' => 'CLUTCH SUB-ASSY, STARTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28150',
        'vehicle_id' => '1',
        
        'description' => 'SWITCH ASSY, MAGNET STARTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28120',
        'vehicle_id' => '1',
        
        'description' => 'YOKE ASSY, STARTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28120A',
        'vehicle_id' => '1',
        
        'description' => 'RING, O(FOR STARTER YOKE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28142A',
        'vehicle_id' => '1',
        
        'description' => 'STARTER KIT',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28160',
        'vehicle_id' => '1',
        
        'description' => 'ARMATURE ASSY, STARTER',
    ]);
    
    DB::table('vehicle_parts')->insert([
        'number' => '91612-61065',
        'vehicle_id' => '1',
        
        'description' => 'BOLT(FOR TRANSAXLE & ENGINE SETTING)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28140',
        'vehicle_id' => '1',
        
        'description' => 'HOLDER ASSY, STARTER BRUSH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '91551-80625',
        'vehicle_id' => '1',
        
        'description' => 'BOLT(FOR CAMSHAFT HOUSING SET)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '19500D',
        'vehicle_id' => '1',
        
        'description' => 'COIL, IGNITION, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '19500-F',
        'vehicle_id' => '1',
        
        'description' => 'CAP, PLUG',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '19100P',
        'vehicle_id' => '1',
        
        'description' => 'PLUG, SPARK',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42611G',
        'vehicle_id' => '1',
        
        'description' => 'VALVE (FOR TUBELESS TIRE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42611J',
        'vehicle_id' => '1',
        
        'description' => 'VALVE (FOR TUBELESS TIRE SPARE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42601C',
        'vehicle_id' => '1',
        
        'description' => 'NUT, HUB (FOR AXLE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42601A',
        'vehicle_id' => '1',
        
        'description' => 'WHEEL, DISC (FOR SPARE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42601',
        'vehicle_id' => '1',
        
        'description' => 'WHEEL, DISC',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42652',
        'vehicle_id' => '1',
        
        'description' => 'TIRE',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42652A',
        'vehicle_id' => '1',
        
        'description' => 'TIRE (FOR SPARE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42603',
        'vehicle_id' => '1',
        
        'description' => 'ORNAMENT SUB-ASSY, WHEEL HUB',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42621',
        'vehicle_id' => '1',
        
        'description' => 'CAP, WHEEL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42603',
        'vehicle_id' => '1',
        
        'description' => 'ORNAMENT SUB-ASSY, WHEEL HUB',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42621',
        'vehicle_id' => '1',
        
        'description' => 'CAP, WHEEL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90942-03204',
        'vehicle_id' => '1',
        
        'description' => 'WEIGHT, BALANCE (FOR DISC WHEEL)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48815',
        'vehicle_id' => '1',
        
        'description' => 'BUSH, FRONT STABILIZER BAR, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48811',
        'vehicle_id' => '1',
        
        'description' => 'BAR, STABILIZER, FRONT',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48684A',
        'vehicle_id' => '1',
        
        'description' => 'COVER, FRONT SUSPENSION SUPPORT DUST, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48684B',
        'vehicle_id' => '1',
        
        'description' => 'COVER, FRONT SUSPENSION SUPPORT DUST, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48682A',
        'vehicle_id' => '1',
        
        'description' => 'SUPPORT, FRONT SUSPENSION, NO.2 RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48682B',
        'vehicle_id' => '1',
        
        'description' => 'SUPPORT, FRONT SUSPENSION, NO.2 LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48619',
        'vehicle_id' => '1',
        
        'description' => 'BEARING, STRUT MOUNTING, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48619A',
        'vehicle_id' => '1',
        
        'description' => 'BEARING, STRUT MOUNTING, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48603D',
        'vehicle_id' => '1',
        
        'description' => 'NUT(FOR FRONT SUPPORT TO FRONT SHOCK ABSORBER RH)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48609E',
        'vehicle_id' => '1',
        
        'description' => 'NUT(FOR FRONT SUPPORT TO FRONT SHOCK ABSORBER LH)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48603',
        'vehicle_id' => '1',
        
        'description' => 'SUPPORT SUB-ASSY, FRONT SUSPENSION, RH',
    ]);

    
    DB::table('vehicle_parts')->insert([
        'number' => '48609',
        'vehicle_id' => '1',
        
        'description' => 'SUPPORT SUB-ASSY, FRONT SUSPENSION, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48510',
        'vehicle_id' => '1',
        
        'description' => 'ABSORBER ASSY, SHOCK, FRONT RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48520',
        'vehicle_id' => '1',
        
        'description' => 'ABSORBER ASSY, SHOCK, FRONT LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48824A',
        'vehicle_id' => '1',
        
        'description' => 'BRACKET, FRONT STABILIZER, NO.1 RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48829A',
        'vehicle_id' => '1',
        
        'description' => 'BRACKET, FRONT STABILIZER, NO.1 LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48820B',
        'vehicle_id' => '1',
        
        'description' => 'LINK ASSY, FRONT STABILIZER, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48810',
        'vehicle_id' => '1',
        
        'description' => 'LINK ASSY, FRONT STABILIZER, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48331B',
        'vehicle_id' => '1',
        
        'description' => 'BUMPER, FRONT SPRING, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48331C',
        'vehicle_id' => '1',
        
        'description' => 'BUMPER, FRONT SPRING, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48131',
        'vehicle_id' => '1',
        
        'description' => 'SPRING, FRONT COIL, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48820A',
        'vehicle_id' => '1',
        
        'description' => 'NUT(FOR FRONT STABILIZER LINK)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48132',
        'vehicle_id' => '1',
        
        'description' => 'SPRING, FRONT COIL, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48471B',
        'vehicle_id' => '1',
        
        'description' => 'SEAT, FRONT COIL SPRING, UPPER RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48471C',
        'vehicle_id' => '1',
        
        'description' => 'SEAT, FRONT COIL SPRING, UPPER LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48157B',
        'vehicle_id' => '1',
        
        'description' => 'INSULATOR, FRONT COIL SPRING, UPPER RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48157C',
        'vehicle_id' => '1',
        
        'description' => 'INSULATOR, FRONT COIL SPRING, UPPER LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42110F',
        'vehicle_id' => '1',
        
        'description' => 'BEAM ASSY, REAR AXLE',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48725F',
        'vehicle_id' => '1',
        
        'description' => 'BUSH, REAR AXLE CARRIER, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90170-T0011',
        'vehicle_id' => '1',
        
        'description' => 'NUT(FOR CLUTCH PEDAL STOPPER)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48597A',
        'vehicle_id' => '1',
        
        'description' => 'RETAINER, REAR SHOCK ABSORBER CUSHION',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48750H',
        'vehicle_id' => '1',
        
        'description' => 'SUPPORT ASSY, REAR SUSPENSION, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48760B',
        'vehicle_id' => '1',
        
        'description' => 'SUPPORT ASSY REAR SUSPENSION, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48257C',
        'vehicle_id' => '1',
        
        'description' => 'INSULATOR, REAR COIL SPRING, UPPER RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48259A',
        'vehicle_id' => '1',
        
        'description' => 'INSULATOR, REAR COIL SPRING, UPPER LH',
    ]);
    
    DB::table('vehicle_parts')->insert([
        'number' => '48231A',
        'vehicle_id' => '1',
        
        'description' => 'SPRING, COIL, REAR RH',
    ]);
     
    DB::table('vehicle_parts')->insert([
        'number' => '48231B',
        'vehicle_id' => '1',
        
        'description' => 'SPRING, COIL, REAR LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48258B',
        'vehicle_id' => '1',
        
        'description' => 'INSULATOR, REAR COIL SPRING, LOWER RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48258C',
        'vehicle_id' => '1',
        
        'description' => 'INSULATOR, REAR COIL SPRING, LOWER LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48755',
        'vehicle_id' => '1',
        
        'description' => 'SUPPORT, REAR SUSPENSION',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48752A',
        'vehicle_id' => '1',
        
        'description' => 'STOPPER, REAR SUSPENSION SUPPORT',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48530',
        'vehicle_id' => '1',
        
        'description' => 'ABSORBER ASSY, SHOCK, REAR RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48540',
        'vehicle_id' => '1',
        
        'description' => 'ABSORBER ASSY, SHOCK, REAR LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48725G',
        'vehicle_id' => '1',
        
        'description' => 'BUSH, REAR AXLE CARRIER, LH',
    ]);
    
        //------------------------------------------------------VEHICLE ID 2------------------------------------------------------    

        DB::table('vehicle_parts')->insert([
            'number' => '22030',
            'vehicle_id' => '2',
            'description' => 'BODY ASSY, THROTTLE W/MOTOR',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '22271',
            'vehicle_id' => '2',
            'description' => 'Duct Sub-Assy, Heater to Register, Center',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90105-06202', 
            'vehicle_id' => '2',
            'description' => 'BOLT(FOR CYLINDER HEAD COVER)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '94151-80600',
            'vehicle_id' => '2',
            'description' => 'NUT, CAP(FOR CYLINDER HEAD COVER)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91621-60614',
            'vehicle_id' => '2',
            'description' => 'BOLT (FOR BREATHER OIL DEFLECTOR) ',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91671-80614',
            'vehicle_id' => '2',
            'description' => 'BOLT (FOR TRANSMISSION CONTROL CABLE BRACKET)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91511-J0840',
            'vehicle_id' => '2',
            'description' => '	BOLT(FOR ALTERNATOR)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91551-80840',
            'vehicle_id' => '2',
            'description' => 'BOLT(FOR HEAD TO CAMSHAFT BEARING CAP)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23250',
            'vehicle_id' => '2',
            'description' => 'INJECTOR ASSY, FUEL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23250B',
            'vehicle_id' => '2',
            'description' => 'RING, O(FOR FUEL INJECTOR)',
        ]);
        
        DB::table('vehicle_parts')->insert([
            'number' => '23291',
            'vehicle_id' => '2',
            'description' => 'INSULATOR, INJECTOR VIBRATION',
        ]);
        
        DB::table('vehicle_parts')->insert([
            'number' => '23842A',
            'vehicle_id' => '2',
            
            'description' => 'CLAMP, FUEL PIPE, 2 (FOR EFI)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23841B',
            'vehicle_id' => '2',
            
            'description' => 'CLAMP, FUEL PIPE, 1 (FOR EFI)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23807V',
            'vehicle_id' => '2',
            
            'description' => 'SPACER, 1 (FOR DELIVERY PIPE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23807',
            'vehicle_id' => '2',
            
            'description' => 'PIPE SUB-ASSY, FUEL DELIVERY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23901',
            'vehicle_id' => '2',
            
            'description' => 'TUBE SUB-ASSY, FUEL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13523',
            'vehicle_id' => '2',
            
            'description' => 'GEAR OR SPROCKET, CAMSHAFT TIMING',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13540',
            'vehicle_id' => '2',
             
            'description' => 'TENSIONER ASSY, CHAIN, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13559',
            'vehicle_id' => '2',
            
            'description' => 'SLIPPER, CHAIN TENSIONER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13050',
            'vehicle_id' => '2',
             
            'description' => 'GEAR ASSY, CAMSHAFT TIMING',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13506',
            'vehicle_id' => '2',
            
            'description' => 'CHAIN SUB-ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91551-80625',
            'vehicle_id' => '2',
             
            'description' => 'BOLT(FOR CAMSHAFT HOUSING SET)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13734',
            'vehicle_id' => '2',
            
            'description' => 'SEAT, VALVE SPRING',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13511',
            'vehicle_id' => '2',
            
            'description' => 'CAMSHAFT',
        ]);
        DB::table('vehicle_parts')->insert([
            'number' => '13741A',
            'vehicle_id' => '2',
            
            'description' => 'LOCK, VALVE SPRING RETAINER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13741',
            'vehicle_id' => '2',
            
            'description' => 'RETAINER, VALVE SPRING',
        ]);
        
        DB::table('vehicle_parts')->insert([
            'number' => '13711C',
            'vehicle_id' => '2',
            
            'description' => 'SPRING, COMPRESSION(FOR OUTER)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13711A',
            'vehicle_id' => '2',
            
            'description' => 'SEAL OR RING, O(FOR VALVE STEM OIL)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13715',
            'vehicle_id' => '2',
            
            'description' => 'VALVE, EXHAUST',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13561',
            'vehicle_id' => '2',
            
            'description' => 'DAMPER, CHAIN VIBRATION, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13711',
            'vehicle_id' => '2',
            
            'description' => 'VALVE, INTAKE',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13751',
            'vehicle_id' => '2',
            
            'description' => 'LIFTER, VALVE',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '16361A',
            'vehicle_id' => '2',
            
            'description' => 'BELT, V(FOR FAN & ALTERNATOR)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55901',
            'vehicle_id' => '2',
            
            'description' => 'BASE SUB-ASSY, HEATER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55910B',
            'vehicle_id' => '2',
            
            'description' => 'BULB, HEATER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55905B',
            'vehicle_id' => '2',
            
            'description' => 'KNOB, HEATER CONTROL, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55902B',
            'vehicle_id' => '2',
            
            'description' => 'CONTROL SUB-ASSY, HEATER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55906A',
            'vehicle_id' => '2',
            
            'description' => 'CABLE SUB-ASSY, DEFROSTER DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55908A',
            'vehicle_id' => '2',
             
            'description' => 'CABLE SUB-ASSY, AIR INLET DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55909A',
            'vehicle_id' => '2',
            
            'description' => 'CABLE SUB-ASSY, AIRMIX DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87211',
            'vehicle_id' => '2',
            
            'description' => 'DUCT, AIR, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87211A',
            'vehicle_id' => '2',
            
            'description' => 'DUCT, AIR, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55843A',
            'vehicle_id' => '2',
            
            'description' => 'DUCT, HEATER TO REGISTER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55844',
            'vehicle_id' => '2',
            
            'description' => 'DUCT, HEATER TO REGISTER, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87201A',
            'vehicle_id' => '2',
            
            'description' => 'DUCT SUB-ASSY, AIR',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55950G',
            'vehicle_id' => '2',
            
            'description' => 'NOZZLE ASSY, DEFROSTER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55840C',
            'vehicle_id' => '2',
            
            'description' => 'DUCT ASSY, HEATER TO REGISTER, NO.6',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88790B',
            'vehicle_id' => '2',
            
            'description' => 'THERMISTOR ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88706A',
            'vehicle_id' => '2',
            
            'description' => 'TUBE SUB-ASSY, LIQUID, A',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88711',
            'vehicle_id' => '2',
             
            'description' => 'HOSE, COOLER REFRIGERANT DISCHARGE, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88712B',
            'vehicle_id' => '2',
            
            'description' => 'HOSE, COOLER REFRIGERANT SUCTION',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88375D',
            'vehicle_id' => '2',
            
            'description' => 'CAP, SERVICE VALVE, NO.2',
        ]);

         DB::table('vehicle_parts')->insert([
            'number' => '88375B',
            'vehicle_id' => '2',
            
            'description' => 'CAP, SERVICE VALVE, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88374B',
            'vehicle_id' => '2',
            
            'description' => 'VALVE, SERVICE, NO.1',

        ]);
        DB::table('vehicle_parts')->insert([
            'number' => '88374C',
            'vehicle_id' => '2',
            
            'description' => 'VALVE, SERVICE, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88891H',
            'vehicle_id' => '2',
            
            'description' => 'COVER, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90467-07164',
            'vehicle_id' => '2',
            
            'description' => 'CLIP',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88460',
            'vehicle_id' => '2',
            
            'description' => 'CONDENSER ASSY, COOLER', 
        ]); 

        DB::table('vehicle_parts')->insert([
            'number' => '88474',
            'vehicle_id' => '2',
            
            'description' => 'DRYER, COOLER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88718-0D310',
            'vehicle_id' => '2',
            
            'description' => 'CLAMP(FOR COOLER REFRIGERANT PIPE), NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14120',
            'vehicle_id' => '2',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14119',
            'vehicle_id' => '2',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14121',
            'vehicle_id' => '2',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88310',
            'vehicle_id' => '2',
            
            'description' => 'COMPRESSOR ASSY, W/PULLEY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87103B',
            'vehicle_id' => '2',
            
            'description' => 'MOTOR SUB-ASSY, BLOWER W/FAN',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87130D',
            'vehicle_id' => '2',
            
            'description' => 'BLOWER ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88515',
            'vehicle_id' => '2',
            
            'description' => 'VALVE, COOLER EXPANSION',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88625',
            'vehicle_id' => '2',
            
            'description' => 'THERMISTOR, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88650E',
            'vehicle_id' => '2',
            
            'description' => 'AMPLIFIER ASSY, AIR CONDITIONER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88548B',
            'vehicle_id' => '2',
            
            'description' => 'CASE, AIR FILTER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87050',
            'vehicle_id' => '2',
            
            'description' => 'RADIATOR ASSY, AIR CONDITIONER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88539J',
            'vehicle_id' => '2',
            
            'description' => 'HOSE, DRAIN COOLER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87138C',
            'vehicle_id' => '2',
            
            'description' => 'RESISTOR, BLOWER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87124B',
            'vehicle_id' => '2',
            
            'description' => 'CLAMP, HEATER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88501',
            'vehicle_id' => '2',
            
            'description' => 'EVAPORATOR SUB-ASSY, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-04542',
            'vehicle_id' => '2',
            
            'description' => 'BOLT(FOR COOLER EXPANSION VALVE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14120',
            'vehicle_id' => '2',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14119',
            'vehicle_id' => '2',
              
            'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14121',
            'vehicle_id' => '2',
              
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
        ]);

        //------------------------------------------------------service id 4 ------------------------------------------------------
        DB::table('vehicle_parts')->insert([
            'number' => '55901',
            'vehicle_id' => '2',
            
            'description' => 'BASE SUB-ASSY, HEATER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55910B',
            'vehicle_id' => '2',
            
            'description' => 'BULB, HEATER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55905B',
            'vehicle_id' => '2',
            
            'description' => 'KNOB, HEATER CONTROL, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55902B',
            'vehicle_id' => '2',
            
            'description' => 'CONTROL SUB-ASSY, HEATER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55906A',
            'vehicle_id' => '2',
            
            'description' => 'CABLE SUB-ASSY, DEFROSTER DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55908A',
            'vehicle_id' => '2',
             
            'description' => 'CABLE SUB-ASSY, AIR INLET DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55909A',
            'vehicle_id' => '2',
            
            'description' => 'CABLE SUB-ASSY, AIRMIX DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87211',
            'vehicle_id' => '2',
            
            'description' => 'DUCT, AIR, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87211A',
            'vehicle_id' => '2',
            
            'description' => 'DUCT, AIR, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55843A',
            'vehicle_id' => '2',
            
            'description' => 'DUCT, HEATER TO REGISTER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55844',
            'vehicle_id' => '2',
            
            'description' => 'DUCT, HEATER TO REGISTER, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87201A',
            'vehicle_id' => '2',
            
            'description' => 'DUCT SUB-ASSY, AIR',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55950G',
            'vehicle_id' => '2',
            
            'description' => 'NOZZLE ASSY, DEFROSTER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55840C',
            'vehicle_id' => '2',
            
            'description' => 'DUCT ASSY, HEATER TO REGISTER, NO.6',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88790B',
            'vehicle_id' => '2',
            
            'description' => 'THERMISTOR ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88706A',
            'vehicle_id' => '2',
            
            'description' => 'TUBE SUB-ASSY, LIQUID, A',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88711',
            'vehicle_id' => '2',
             
            'description' => 'HOSE, COOLER REFRIGERANT DISCHARGE, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88712B',
            'vehicle_id' => '2',
            
            'description' => 'HOSE, COOLER REFRIGERANT SUCTION',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88375D',
            'vehicle_id' => '2',
            
            'description' => 'CAP, SERVICE VALVE, NO.2',
        ]);

         DB::table('vehicle_parts')->insert([
            'number' => '88375B',
            'vehicle_id' => '2',
            
            'description' => 'CAP, SERVICE VALVE, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88374B',
            'vehicle_id' => '2',
            
            'description' => 'VALVE, SERVICE, NO.1',

        ]);
        DB::table('vehicle_parts')->insert([
            'number' => '88374C',
            'vehicle_id' => '2',
            
            'description' => 'VALVE, SERVICE, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88891H',
            'vehicle_id' => '2',
            
            'description' => 'COVER, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90467-07164',
            'vehicle_id' => '2',
            
            'description' => 'CLIP',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88460',
            'vehicle_id' => '2',
            
            'description' => 'CONDENSER ASSY, COOLER', 
        ]); 

        DB::table('vehicle_parts')->insert([
            'number' => '88474',
            'vehicle_id' => '2',
            
            'description' => 'DRYER, COOLER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88718-0D310',
            'vehicle_id' => '2',
            
            'description' => 'CLAMP(FOR COOLER REFRIGERANT PIPE), NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14120',
            'vehicle_id' => '2',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14119',
            'vehicle_id' => '2',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14121',
            'vehicle_id' => '2',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88310',
            'vehicle_id' => '2',
            
            'description' => 'COMPRESSOR ASSY, W/PULLEY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87103B',
            'vehicle_id' => '2',
            
            'description' => 'MOTOR SUB-ASSY, BLOWER W/FAN',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87130D',
            'vehicle_id' => '2',
            
            'description' => 'BLOWER ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88515',
            'vehicle_id' => '2',
            
            'description' => 'VALVE, COOLER EXPANSION',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88625',
            'vehicle_id' => '2',
            
            'description' => 'THERMISTOR, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88650E',
            'vehicle_id' => '2',
            
            'description' => 'AMPLIFIER ASSY, AIR CONDITIONER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88548B',
            'vehicle_id' => '2',
            
            'description' => 'CASE, AIR FILTER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87050',
            'vehicle_id' => '2',
            
            'description' => 'RADIATOR ASSY, AIR CONDITIONER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88539J',
            'vehicle_id' => '2',
            
            'description' => 'HOSE, DRAIN COOLER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87138C',
            'vehicle_id' => '2',
            
            'description' => 'RESISTOR, BLOWER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87124B',
            'vehicle_id' => '2',
            
            'description' => 'CLAMP, HEATER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88501',
            'vehicle_id' => '2',
            
            'description' => 'EVAPORATOR SUB-ASSY, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-04542',
            'vehicle_id' => '2',
            
            'description' => 'BOLT(FOR COOLER EXPANSION VALVE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14120',
            'vehicle_id' => '2',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14119',
            'vehicle_id' => '2',
              
            'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14121',
            'vehicle_id' => '2',
              
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
        ]);
        
      DB::table('vehicle_parts')->insert([
        'number' => '55901',
        'vehicle_id' => '2',
        
        'description' => 'BASE SUB-ASSY, HEATER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55910B',
        'vehicle_id' => '2',
        
        'description' => 'BULB, HEATER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55905B',
        'vehicle_id' => '2',
        
        'description' => 'KNOB, HEATER CONTROL, NO.2',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55902B',
        'vehicle_id' => '2',
        
        'description' => 'CONTROL SUB-ASSY, HEATER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55906A',
        'vehicle_id' => '2',
        
        'description' => 'CABLE SUB-ASSY, DEFROSTER DAMPER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55908A',
        'vehicle_id' => '2',
         
        'description' => 'CABLE SUB-ASSY, AIR INLET DAMPER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55909A',
        'vehicle_id' => '2',
        
        'description' => 'CABLE SUB-ASSY, AIRMIX DAMPER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87211',
        'vehicle_id' => '2',
        
        'description' => 'DUCT, AIR, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87211A',
        'vehicle_id' => '2',
        
        'description' => 'DUCT, AIR, NO.2',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55843A',
        'vehicle_id' => '2',
        
        'description' => 'DUCT, HEATER TO REGISTER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55844',
        'vehicle_id' => '2',
        
        'description' => 'DUCT, HEATER TO REGISTER, NO.2',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87201A',
        'vehicle_id' => '2',
        
        'description' => 'DUCT SUB-ASSY, AIR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55950G',
        'vehicle_id' => '2',
        
        'description' => 'NOZZLE ASSY, DEFROSTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55840C',
        'vehicle_id' => '2',
        
        'description' => 'DUCT ASSY, HEATER TO REGISTER, NO.6',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88790B',
        'vehicle_id' => '2',
        
        'description' => 'THERMISTOR ASSY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88706A',
        'vehicle_id' => '2',
        
        'description' => 'TUBE SUB-ASSY, LIQUID, A',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88711',
        'vehicle_id' => '2',
         
        'description' => 'HOSE, COOLER REFRIGERANT DISCHARGE, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88712B',
        'vehicle_id' => '2',
        
        'description' => 'HOSE, COOLER REFRIGERANT SUCTION',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88375D',
        'vehicle_id' => '2',
        
        'description' => 'CAP, SERVICE VALVE, NO.2',
    ]);

     DB::table('vehicle_parts')->insert([
        'number' => '88375B',
        'vehicle_id' => '2',
        
        'description' => 'CAP, SERVICE VALVE, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88374B',
        'vehicle_id' => '2',
        
        'description' => 'VALVE, SERVICE, NO.1',

    ]);
    DB::table('vehicle_parts')->insert([
        'number' => '88374C',
        'vehicle_id' => '2',
        
        'description' => 'VALVE, SERVICE, NO.2',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88891H',
        'vehicle_id' => '2',
        
        'description' => 'COVER, COOLER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90467-07164',
        'vehicle_id' => '2',
        
        'description' => 'CLIP',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88460',
        'vehicle_id' => '2',
        
        'description' => 'CONDENSER ASSY, COOLER', 
    ]); 

    DB::table('vehicle_parts')->insert([
        'number' => '88474',
        'vehicle_id' => '2',
        
        'description' => 'DRYER, COOLER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88718-0D310',
        'vehicle_id' => '2',
        
        'description' => 'CLAMP(FOR COOLER REFRIGERANT PIPE), NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14120',
        'vehicle_id' => '2',
        
        'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14119',
        'vehicle_id' => '2',
        
        'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14121',
        'vehicle_id' => '2',
        
        'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88310',
        'vehicle_id' => '2',
        
        'description' => 'COMPRESSOR ASSY, W/PULLEY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87103B',
        'vehicle_id' => '2',
        
        'description' => 'MOTOR SUB-ASSY, BLOWER W/FAN',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87130D',
        'vehicle_id' => '2',
        
        'description' => 'BLOWER ASSY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88515',
        'vehicle_id' => '2',
        
        'description' => 'VALVE, COOLER EXPANSION',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88625',
        'vehicle_id' => '2',
        
        'description' => 'THERMISTOR, COOLER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88650E',
        'vehicle_id' => '2',
        
        'description' => 'AMPLIFIER ASSY, AIR CONDITIONER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88548B',
        'vehicle_id' => '2',
        
        'description' => 'CASE, AIR FILTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87050',
        'vehicle_id' => '2',
        
        'description' => 'RADIATOR ASSY, AIR CONDITIONER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88539J',
        'vehicle_id' => '2',
        
        'description' => 'HOSE, DRAIN COOLER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87138C',
        'vehicle_id' => '2',
        
        'description' => 'RESISTOR, BLOWER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87124B',
        'vehicle_id' => '2',
        
        'description' => 'CLAMP, HEATER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88501',
        'vehicle_id' => '2',
        
        'description' => 'EVAPORATOR SUB-ASSY, COOLER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-04542',
        'vehicle_id' => '2',
        
        'description' => 'BOLT(FOR COOLER EXPANSION VALVE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14120',
        'vehicle_id' => '2',
        
        'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14119',
        'vehicle_id' => '2',
          
        'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14121',
        'vehicle_id' => '2',
          
        'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
    ]);
    DB::table('vehicle_parts')->insert([
        'number' => '28800J',
        'vehicle_id' => '2',
        
        'description' => 'TERMINAL, BATTERY NEGATIVE',
    ]);
    
    DB::table('vehicle_parts')->insert([
        'number' => '28800A',
        'vehicle_id' => '2',
        
        'description' => 'TERMINAL, BATTERY POSITIVE',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28800',
        'vehicle_id' => '2',
        
        'description' => 'BATTERY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90178-T0019',
        'vehicle_id' => '2',
        
        'description' => 'NUT (FOR TRANSMISSION CONTROL CABLE)',
    ]);
    
    DB::table('vehicle_parts')->insert([
        'number' => '27330',
        'vehicle_id' => '2',
        
        'description' => 'ROTOR ASSY, ALTERNATOR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27020',
        'vehicle_id' => '2',
        
        'description' => 'ALTERNATOR ASSY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27370A',
        'vehicle_id' => '2',
        
        'description' => 'HOLDER ASSY, ALTERNATOR BRUSH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27360',
        'vehicle_id' => '2',
        
        'description' => 'COIL ASSY, ALTERNATOR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27039',
        'vehicle_id' => '2',
        
        'description' => 'COVER, ALTERNATOR REAR END',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27020E',
        'vehicle_id' => '2',
        
        'description' => 'BOLT(FOR ALTERNATOR)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '16381D',
        'vehicle_id' => '2',
        
        'description' => 'BAR, FAN BELT ADJUSTING',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27310',
        'vehicle_id' => '2',
        
        'description' => 'FRAME ASSY, DRIVE END, ALTERNATOR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90068-00022',
        'vehicle_id' => '2',
        
        'description' => 'SCREW(FOR ALTERNATOR DRIVE END FRAME)',
    ]);
    DB::table('vehicle_parts')->insert([
        'number' => '90068-04046',
        'vehicle_id' => '2',
        
        'description' => 'BOLT(FOR ALTERNATOR REAR END COVER)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90068-00023',
        'vehicle_id' => '2',
        
        'description' => 'SCREW(FOR ALTERNATOR BRUSH HOLDER)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27312',
        'vehicle_id' => '2',
        
        'description' => 'PLATE, RETAINER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27310B',
        'vehicle_id' => '2',
        
        'description' => 'BEARING(FOR ALTERNATOR DRIVE END FRAME)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27384',
        'vehicle_id' => '2',
        
        'description' => 'WASHER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27446A',
        'vehicle_id' => '2',
        
        'description' => 'CLAMP',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27411',
        'vehicle_id' => '2',
        
        'description' => 'PULLEY, ALTERNATOR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27387B',
        'vehicle_id' => '2',
        
        'description' => '	INSULATOR, ALTERNATOR TERMINAL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90068-05009',
        'vehicle_id' => '2',
        
        'description' => 'NUT(FOR ALTERNATOR PULLEY)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28100',
        'vehicle_id' => '2',
        
        'description' => 'STARTER ASSY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28011',
        'vehicle_id' => '2',
        
        'description' => 'CLUTCH SUB-ASSY, STARTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28150',
        'vehicle_id' => '2',
        
        'description' => 'SWITCH ASSY, MAGNET STARTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28120',
        'vehicle_id' => '2',
        
        'description' => 'YOKE ASSY, STARTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28120A',
        'vehicle_id' => '2',
        
        'description' => 'RING, O(FOR STARTER YOKE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28142A',
        'vehicle_id' => '2',
        
        'description' => 'STARTER KIT',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28160',
        'vehicle_id' => '2',
        
        'description' => 'ARMATURE ASSY, STARTER',
    ]);
    
    DB::table('vehicle_parts')->insert([
        'number' => '91612-61065',
        'vehicle_id' => '2',
        
        'description' => 'BOLT(FOR TRANSAXLE & ENGINE SETTING)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '281402',
        'vehicle_id' => '2',
        
        'description' => 'HOLDER ASSY, STARTER BRUSH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '91551-80625',
        'vehicle_id' => '2',
        
        'description' => 'BOLT(FOR CAMSHAFT HOUSING SET)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '19500D',
        'vehicle_id' => '2',
        
        'description' => 'COIL, IGNITION, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '19500-F',
        'vehicle_id' => '2',
        
        'description' => 'CAP, PLUG',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '19100P',
        'vehicle_id' => '2',
        
        'description' => 'PLUG, SPARK',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42611G',
        'vehicle_id' => '2',
        
        'description' => 'VALVE (FOR TUBELESS TIRE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42611J',
        'vehicle_id' => '2',
        
        'description' => 'VALVE (FOR TUBELESS TIRE SPARE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42601C',
        'vehicle_id' => '2',
        
        'description' => 'NUT, HUB (FOR AXLE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42601A',
        'vehicle_id' => '2',
        
        'description' => 'WHEEL, DISC (FOR SPARE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42601',
        'vehicle_id' => '2',
        
        'description' => 'WHEEL, DISC',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42652',
        'vehicle_id' => '2',
        
        'description' => 'TIRE',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42652A',
        'vehicle_id' => '2',
        
        'description' => 'TIRE (FOR SPARE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42603',
        'vehicle_id' => '2',
        
        'description' => 'ORNAMENT SUB-ASSY, WHEEL HUB',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42621',
        'vehicle_id' => '2',
        
        'description' => 'CAP, WHEEL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42603',
        'vehicle_id' => '2',
        
        'description' => 'ORNAMENT SUB-ASSY, WHEEL HUB',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42621',
        'vehicle_id' => '2',
        
        'description' => 'CAP, WHEEL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90942-03204',
        'vehicle_id' => '2',
        
        'description' => 'WEIGHT, BALANCE (FOR DISC WHEEL)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48815',
        'vehicle_id' => '2',
        
        'description' => 'BUSH, FRONT STABILIZER BAR, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48811',
        'vehicle_id' => '2',
        
        'description' => 'BAR, STABILIZER, FRONT',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48684A',
        'vehicle_id' => '2',
        
        'description' => 'COVER, FRONT SUSPENSION SUPPORT DUST, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48684B',
        'vehicle_id' => '2',
        
        'description' => 'COVER, FRONT SUSPENSION SUPPORT DUST, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48682A',
        'vehicle_id' => '2',
        
        'description' => 'SUPPORT, FRONT SUSPENSION, NO.2 RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48682B',
        'vehicle_id' => '2',
        
        'description' => 'SUPPORT, FRONT SUSPENSION, NO.2 LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48619',
        'vehicle_id' => '2',
        
        'description' => 'BEARING, STRUT MOUNTING, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48619A',
        'vehicle_id' => '2',
        
        'description' => 'BEARING, STRUT MOUNTING, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48603D',
        'vehicle_id' => '2',
        
        'description' => 'NUT(FOR FRONT SUPPORT TO FRONT SHOCK ABSORBER RH)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48609E',
        'vehicle_id' => '2',
        
        'description' => 'NUT(FOR FRONT SUPPORT TO FRONT SHOCK ABSORBER LH)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48603',
        'vehicle_id' => '2',
        
        'description' => 'SUPPORT SUB-ASSY, FRONT SUSPENSION, RH',
    ]);

    
    DB::table('vehicle_parts')->insert([
        'number' => '48609',
        'vehicle_id' => '2',
        
        'description' => 'SUPPORT SUB-ASSY, FRONT SUSPENSION, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48510',
        'vehicle_id' => '2',
        
        'description' => 'ABSORBER ASSY, SHOCK, FRONT RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48520',
        'vehicle_id' => '2',
        
        'description' => 'ABSORBER ASSY, SHOCK, FRONT LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48824A',
        'vehicle_id' => '2',
        
        'description' => 'BRACKET, FRONT STABILIZER, NO.1 RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48829A',
        'vehicle_id' => '2',
        
        'description' => 'BRACKET, FRONT STABILIZER, NO.1 LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48820B',
        'vehicle_id' => '2',
        
        'description' => 'LINK ASSY, FRONT STABILIZER, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48810',
        'vehicle_id' => '2',
        
        'description' => 'LINK ASSY, FRONT STABILIZER, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48331B',
        'vehicle_id' => '2',
        
        'description' => 'BUMPER, FRONT SPRING, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48331C',
        'vehicle_id' => '2',
        
        'description' => 'BUMPER, FRONT SPRING, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48131',
        'vehicle_id' => '2',
        
        'description' => 'SPRING, FRONT COIL, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48820A',
        'vehicle_id' => '2',
        
        'description' => 'NUT(FOR FRONT STABILIZER LINK)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48132',
        'vehicle_id' => '2',
        
        'description' => 'SPRING, FRONT COIL, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48471B',
        'vehicle_id' => '2',
        
        'description' => 'SEAT, FRONT COIL SPRING, UPPER RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48471C',
        'vehicle_id' => '2',
        
        'description' => 'SEAT, FRONT COIL SPRING, UPPER LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48157B',
        'vehicle_id' => '2',
        
        'description' => 'INSULATOR, FRONT COIL SPRING, UPPER RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48157C',
        'vehicle_id' => '2',
        
        'description' => 'INSULATOR, FRONT COIL SPRING, UPPER LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42110F',
        'vehicle_id' => '2',
        
        'description' => 'BEAM ASSY, REAR AXLE',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48725F',
        'vehicle_id' => '2',
        
        'description' => 'BUSH, REAR AXLE CARRIER, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90170-T0011',
        'vehicle_id' => '2',
        
        'description' => 'NUT(FOR CLUTCH PEDAL STOPPER)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48597A',
        'vehicle_id' => '2',
        
        'description' => 'RETAINER, REAR SHOCK ABSORBER CUSHION',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48750H',
        'vehicle_id' => '2',
        
        'description' => 'SUPPORT ASSY, REAR SUSPENSION, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48760B',
        'vehicle_id' => '2',
        
        'description' => 'SUPPORT ASSY REAR SUSPENSION, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48257C',
        'vehicle_id' => '2',
        
        'description' => 'INSULATOR, REAR COIL SPRING, UPPER RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48259A',
        'vehicle_id' => '2',
        
        'description' => 'INSULATOR, REAR COIL SPRING, UPPER LH',
    ]);
    
    DB::table('vehicle_parts')->insert([
        'number' => '48231A',
        'vehicle_id' => '2',
        
        'description' => 'SPRING, COIL, REAR RH',
    ]);
     
    DB::table('vehicle_parts')->insert([
        'number' => '48231B',
        'vehicle_id' => '2',
        
        'description' => 'SPRING, COIL, REAR LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48258B',
        'vehicle_id' => '2',
        
        'description' => 'INSULATOR, REAR COIL SPRING, LOWER RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48258C',
        'vehicle_id' => '2',
        
        'description' => 'INSULATOR, REAR COIL SPRING, LOWER LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48755',
        'vehicle_id' => '2',
        
        'description' => 'SUPPORT, REAR SUSPENSION',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48752A',
        'vehicle_id' => '2',
        
        'description' => 'STOPPER, REAR SUSPENSION SUPPORT',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48530',
        'vehicle_id' => '2',
        
        'description' => 'ABSORBER ASSY, SHOCK, REAR RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48540',
        'vehicle_id' => '2',
        
        'description' => 'ABSORBER ASSY, SHOCK, REAR LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48725G',
        'vehicle_id' => '2',
        
        'description' => 'BUSH, REAR AXLE CARRIER, LH',
    ]);

  
    
        //------------------------------------------------------VEHICLE ID 3------------------------------------------------------    

        DB::table('vehicle_parts')->insert([
            'number' => '22030',
            'vehicle_id' => '3',
            
            'description' => 'BODY ASSY, THROTTLE W/MOTOR',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '22271',
            'vehicle_id' => '3',
            
            'description' => 'Duct Sub-Assy, Heater to Register, Center',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90105-06202', 
            'vehicle_id' => '3',
            
            'description' => 'BOLT(FOR CYLINDER HEAD COVER)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '94151-80600',
            'vehicle_id' => '3',
            
            'description' => 'NUT, CAP(FOR CYLINDER HEAD COVER)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91621-60614',
            'vehicle_id' => '3',
            
            'description' => 'BOLT (FOR BREATHER OIL DEFLECTOR) ',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91671-80614',
            'vehicle_id' => '3',
            
            'description' => 'BOLT (FOR TRANSMISSION CONTROL CABLE BRACKET)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91511-J0840',
            'vehicle_id' => '3',
            
            'description' => '	BOLT(FOR ALTERNATOR)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91551-80840',
            'vehicle_id' => '3',
            
            'description' => 'BOLT(FOR HEAD TO CAMSHAFT BEARING CAP)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23250',
            'vehicle_id' => '3',
            
            'description' => 'INJECTOR ASSY, FUEL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23250B',
            'vehicle_id' => '3',
            
            'description' => 'RING, O(FOR FUEL INJECTOR)',
        ]);
        
        DB::table('vehicle_parts')->insert([
            'number' => '23291',
            'vehicle_id' => '3',
            
            'description' => 'INSULATOR, INJECTOR VIBRATION',
        ]);
        
        DB::table('vehicle_parts')->insert([
            'number' => '23842A',
            'vehicle_id' => '3',
            
            'description' => 'CLAMP, FUEL PIPE, 2 (FOR EFI)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23841B',
            'vehicle_id' => '3',
            
            'description' => 'CLAMP, FUEL PIPE, 1 (FOR EFI)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23807V',
            'vehicle_id' => '3',
            
            'description' => 'SPACER, 1 (FOR DELIVERY PIPE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23807',
            'vehicle_id' => '3',
            
            'description' => 'PIPE SUB-ASSY, FUEL DELIVERY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '23901',
            'vehicle_id' => '3',
            
            'description' => 'TUBE SUB-ASSY, FUEL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13523',
            'vehicle_id' => '3',
            
            'description' => 'GEAR OR SPROCKET, CAMSHAFT TIMING',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13540',
            'vehicle_id' => '3',
             
            'description' => 'TENSIONER ASSY, CHAIN, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13559',
            'vehicle_id' => '3',
            
            'description' => 'SLIPPER, CHAIN TENSIONER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13050',
            'vehicle_id' => '3',
             
            'description' => 'GEAR ASSY, CAMSHAFT TIMING',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13506',
            'vehicle_id' => '3',
            
            'description' => 'CHAIN SUB-ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '91551-80625',
            'vehicle_id' => '3',
             
            'description' => 'BOLT(FOR CAMSHAFT HOUSING SET)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13512',
            'vehicle_id' => '3',
            
            'description' => 'CAMSHAFT, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13734',
            'vehicle_id' => '3',
            
            'description' => 'SEAT, VALVE SPRING',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13511',
            'vehicle_id' => '3',
            
            'description' => 'CAMSHAFT',
        ]);
        DB::table('vehicle_parts')->insert([
            'number' => '13741A',
            'vehicle_id' => '3',
            
            'description' => 'LOCK, VALVE SPRING RETAINER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13741',
            'vehicle_id' => '3',
            
            'description' => 'RETAINER, VALVE SPRING',
        ]);
        
        DB::table('vehicle_parts')->insert([
            'number' => '13711C',
            'vehicle_id' => '3',
            
            'description' => 'SPRING, COMPRESSION(FOR OUTER)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13711A',
            'vehicle_id' => '3',
            
            'description' => 'SEAL OR RING, O(FOR VALVE STEM OIL)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13715',
            'vehicle_id' => '3',
            
            'description' => 'VALVE, EXHAUST',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13561',
            'vehicle_id' => '3',
            
            'description' => 'DAMPER, CHAIN VIBRATION, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13711',
            'vehicle_id' => '3',
            
            'description' => 'VALVE, INTAKE',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '13751',
            'vehicle_id' => '3',
            
            'description' => 'LIFTER, VALVE',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '16361A',
            'vehicle_id' => '3',
            
            'description' => 'BELT, V(FOR FAN & ALTERNATOR)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55901',
            'vehicle_id' => '3',
            
            'description' => 'BASE SUB-ASSY, HEATER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55910B',
            'vehicle_id' => '3',
            
            'description' => 'BULB, HEATER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55905B',
            'vehicle_id' => '3',
            
            'description' => 'KNOB, HEATER CONTROL, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55902B',
            'vehicle_id' => '3',
            
            'description' => 'CONTROL SUB-ASSY, HEATER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55906A',
            'vehicle_id' => '3',
            
            'description' => 'CABLE SUB-ASSY, DEFROSTER DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55908A',
            'vehicle_id' => '3',
             
            'description' => 'CABLE SUB-ASSY, AIR INLET DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55909A',
            'vehicle_id' => '3',
            
            'description' => 'CABLE SUB-ASSY, AIRMIX DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87211',
            'vehicle_id' => '3',
            
            'description' => 'DUCT, AIR, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87211A',
            'vehicle_id' => '3',
            
            'description' => 'DUCT, AIR, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55843A',
            'vehicle_id' => '3',
            
            'description' => 'DUCT, HEATER TO REGISTER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55844',
            'vehicle_id' => '3',
            
            'description' => 'DUCT, HEATER TO REGISTER, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87201A',
            'vehicle_id' => '3',
            
            'description' => 'DUCT SUB-ASSY, AIR',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55950G',
            'vehicle_id' => '3',
            
            'description' => 'NOZZLE ASSY, DEFROSTER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55840C',
            'vehicle_id' => '3',
            
            'description' => 'DUCT ASSY, HEATER TO REGISTER, NO.6',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88790B',
            'vehicle_id' => '3',
            
            'description' => 'THERMISTOR ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88706A',
            'vehicle_id' => '3',
            
            'description' => 'TUBE SUB-ASSY, LIQUID, A',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88711',
            'vehicle_id' => '3',
             
            'description' => 'HOSE, COOLER REFRIGERANT DISCHARGE, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88712B',
            'vehicle_id' => '3',
            
            'description' => 'HOSE, COOLER REFRIGERANT SUCTION',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88375D',
            'vehicle_id' => '3',
            
            'description' => 'CAP, SERVICE VALVE, NO.2',
        ]);

         DB::table('vehicle_parts')->insert([
            'number' => '88375B',
            'vehicle_id' => '3',
            
            'description' => 'CAP, SERVICE VALVE, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88374B',
            'vehicle_id' => '3',
            
            'description' => 'VALVE, SERVICE, NO.1',

        ]);
        DB::table('vehicle_parts')->insert([
            'number' => '88374C',
            'vehicle_id' => '3',
            
            'description' => 'VALVE, SERVICE, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88891H',
            'vehicle_id' => '3',
            
            'description' => 'COVER, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90467-07164',
            'vehicle_id' => '3',
            
            'description' => 'CLIP',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88460',
            'vehicle_id' => '3',
            
            'description' => 'CONDENSER ASSY, COOLER', 
        ]); 

        DB::table('vehicle_parts')->insert([
            'number' => '88474',
            'vehicle_id' => '3',
            
            'description' => 'DRYER, COOLER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88718-0D310',
            'vehicle_id' => '3',
            
            'description' => 'CLAMP(FOR COOLER REFRIGERANT PIPE), NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14120',
            'vehicle_id' => '3',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14119',
            'vehicle_id' => '3',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14121',
            'vehicle_id' => '3',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88310',
            'vehicle_id' => '3',
            
            'description' => 'COMPRESSOR ASSY, W/PULLEY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87103B',
            'vehicle_id' => '3',
            
            'description' => 'MOTOR SUB-ASSY, BLOWER W/FAN',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87130D',
            'vehicle_id' => '3',
            
            'description' => 'BLOWER ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88515',
            'vehicle_id' => '3',
            
            'description' => 'VALVE, COOLER EXPANSION',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88625',
            'vehicle_id' => '3',
            
            'description' => 'THERMISTOR, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88650E',
            'vehicle_id' => '3',
            
            'description' => 'AMPLIFIER ASSY, AIR CONDITIONER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88548B',
            'vehicle_id' => '3',
            
            'description' => 'CASE, AIR FILTER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87050',
            'vehicle_id' => '3',
            
            'description' => 'RADIATOR ASSY, AIR CONDITIONER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88539J',
            'vehicle_id' => '3',
            
            'description' => 'HOSE, DRAIN COOLER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87138C',
            'vehicle_id' => '3',
            
            'description' => 'RESISTOR, BLOWER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87124B',
            'vehicle_id' => '3',
            
            'description' => 'CLAMP, HEATER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88501',
            'vehicle_id' => '3',
            
            'description' => 'EVAPORATOR SUB-ASSY, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-04542',
            'vehicle_id' => '3',
            
            'description' => 'BOLT(FOR COOLER EXPANSION VALVE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14120',
            'vehicle_id' => '3',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14119',
            'vehicle_id' => '3',
              
            'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14121',
            'vehicle_id' => '3',
              
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
        ]);

        //------------------------------------------------------service id 4 ------------------------------------------------------
        DB::table('vehicle_parts')->insert([
            'number' => '55901',
            'vehicle_id' => '3',
            
            'description' => 'BASE SUB-ASSY, HEATER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55910B',
            'vehicle_id' => '3',
            
            'description' => 'BULB, HEATER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55905B',
            'vehicle_id' => '3',
            
            'description' => 'KNOB, HEATER CONTROL, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55902B',
            'vehicle_id' => '3',
            
            'description' => 'CONTROL SUB-ASSY, HEATER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55906A',
            'vehicle_id' => '3',
            
            'description' => 'CABLE SUB-ASSY, DEFROSTER DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55908A',
            'vehicle_id' => '3',
             
            'description' => 'CABLE SUB-ASSY, AIR INLET DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55909A',
            'vehicle_id' => '3',
            
            'description' => 'CABLE SUB-ASSY, AIRMIX DAMPER CONTROL',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87211',
            'vehicle_id' => '3',
            
            'description' => 'DUCT, AIR, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87211A',
            'vehicle_id' => '3',
            
            'description' => 'DUCT, AIR, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55843A',
            'vehicle_id' => '3',
            
            'description' => 'DUCT, HEATER TO REGISTER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55844',
            'vehicle_id' => '3',
            
            'description' => 'DUCT, HEATER TO REGISTER, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87201A',
            'vehicle_id' => '3',
            
            'description' => 'DUCT SUB-ASSY, AIR',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55950G',
            'vehicle_id' => '3',
            
            'description' => 'NOZZLE ASSY, DEFROSTER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '55840C',
            'vehicle_id' => '3',
            
            'description' => 'DUCT ASSY, HEATER TO REGISTER, NO.6',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88790B',
            'vehicle_id' => '3',
            
            'description' => 'THERMISTOR ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88706A',
            'vehicle_id' => '3',
            
            'description' => 'TUBE SUB-ASSY, LIQUID, A',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88711',
            'vehicle_id' => '3',
             
            'description' => 'HOSE, COOLER REFRIGERANT DISCHARGE, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88712B',
            'vehicle_id' => '3',
            
            'description' => 'HOSE, COOLER REFRIGERANT SUCTION',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88375D',
            'vehicle_id' => '3',
            
            'description' => 'CAP, SERVICE VALVE, NO.2',
        ]);

         DB::table('vehicle_parts')->insert([
            'number' => '88375B',
            'vehicle_id' => '3',
            
            'description' => 'CAP, SERVICE VALVE, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88374B',
            'vehicle_id' => '3',
            
            'description' => 'VALVE, SERVICE, NO.1',

        ]);
        DB::table('vehicle_parts')->insert([
            'number' => '88374C',
            'vehicle_id' => '3',
            
            'description' => 'VALVE, SERVICE, NO.2',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88891H',
            'vehicle_id' => '3',
            
            'description' => 'COVER, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90467-07164',
            'vehicle_id' => '3',
            
            'description' => 'CLIP',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88460',
            'vehicle_id' => '3',
            
            'description' => 'CONDENSER ASSY, COOLER', 
        ]); 

        DB::table('vehicle_parts')->insert([
            'number' => '88474',
            'vehicle_id' => '3',
            
            'description' => 'DRYER, COOLER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88718-0D310',
            'vehicle_id' => '3',
            
            'description' => 'CLAMP(FOR COOLER REFRIGERANT PIPE), NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14120',
            'vehicle_id' => '3',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14119',
            'vehicle_id' => '3',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14121',
            'vehicle_id' => '3',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88310',
            'vehicle_id' => '3',
            
            'description' => 'COMPRESSOR ASSY, W/PULLEY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87103B',
            'vehicle_id' => '3',
            
            'description' => 'MOTOR SUB-ASSY, BLOWER W/FAN',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87130D',
            'vehicle_id' => '3',
            
            'description' => 'BLOWER ASSY',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88515',
            'vehicle_id' => '3',
            
            'description' => 'VALVE, COOLER EXPANSION',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88625',
            'vehicle_id' => '3',
            
            'description' => 'THERMISTOR, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88650E',
            'vehicle_id' => '3',
            
            'description' => 'AMPLIFIER ASSY, AIR CONDITIONER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88548B',
            'vehicle_id' => '3',
            
            'description' => 'CASE, AIR FILTER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87050',
            'vehicle_id' => '3',
            
            'description' => 'RADIATOR ASSY, AIR CONDITIONER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88539J',
            'vehicle_id' => '3',
            
            'description' => 'HOSE, DRAIN COOLER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87138C',
            'vehicle_id' => '3',
            
            'description' => 'RESISTOR, BLOWER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '87124B',
            'vehicle_id' => '3',
            
            'description' => 'CLAMP, HEATER',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '88501',
            'vehicle_id' => '3',
            
            'description' => 'EVAPORATOR SUB-ASSY, COOLER, NO.1',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-04542',
            'vehicle_id' => '3',
            
            'description' => 'BOLT(FOR COOLER EXPANSION VALVE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14120',
            'vehicle_id' => '3',
            
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14119',
            'vehicle_id' => '3',
              
            'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
        ]);

        DB::table('vehicle_parts')->insert([
            'number' => '90099-14121',
            'vehicle_id' => '3',
              
            'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
        ]);
        
      DB::table('vehicle_parts')->insert([
        'number' => '55901',
        'vehicle_id' => '3',
        
        'description' => 'BASE SUB-ASSY, HEATER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55910B',
        'vehicle_id' => '3',
        
        'description' => 'BULB, HEATER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55905B',
        'vehicle_id' => '3',
        
        'description' => 'KNOB, HEATER CONTROL, NO.2',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55902B',
        'vehicle_id' => '3',
        
        'description' => 'CONTROL SUB-ASSY, HEATER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55906A',
        'vehicle_id' => '3',
        
        'description' => 'CABLE SUB-ASSY, DEFROSTER DAMPER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55908A',
        'vehicle_id' => '3',
         
        'description' => 'CABLE SUB-ASSY, AIR INLET DAMPER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55909A',
        'vehicle_id' => '3',
        
        'description' => 'CABLE SUB-ASSY, AIRMIX DAMPER CONTROL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87211',
        'vehicle_id' => '3',
        
        'description' => 'DUCT, AIR, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87211A',
        'vehicle_id' => '3',
        
        'description' => 'DUCT, AIR, NO.2',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55843A',
        'vehicle_id' => '3',
        
        'description' => 'DUCT, HEATER TO REGISTER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55844',
        'vehicle_id' => '3',
        
        'description' => 'DUCT, HEATER TO REGISTER, NO.2',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87201A',
        'vehicle_id' => '3',
        
        'description' => 'DUCT SUB-ASSY, AIR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55950G',
        'vehicle_id' => '3',
        
        'description' => 'NOZZLE ASSY, DEFROSTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '55840C',
        'vehicle_id' => '3',
        
        'description' => 'DUCT ASSY, HEATER TO REGISTER, NO.6',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88790B',
        'vehicle_id' => '3',
        
        'description' => 'THERMISTOR ASSY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88706A',
        'vehicle_id' => '3',
        
        'description' => 'TUBE SUB-ASSY, LIQUID, A',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88711',
        'vehicle_id' => '3',
         
        'description' => 'HOSE, COOLER REFRIGERANT DISCHARGE, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88712B',
        'vehicle_id' => '3',
        
        'description' => 'HOSE, COOLER REFRIGERANT SUCTION',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88375D',
        'vehicle_id' => '3',
        
        'description' => 'CAP, SERVICE VALVE, NO.2',
    ]);

     DB::table('vehicle_parts')->insert([
        'number' => '88375B',
        'vehicle_id' => '3',
        
        'description' => 'CAP, SERVICE VALVE, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88374B',
        'vehicle_id' => '3',
        
        'description' => 'VALVE, SERVICE, NO.1',

    ]);
    DB::table('vehicle_parts')->insert([
        'number' => '88374C',
        'vehicle_id' => '3',
        
        'description' => 'VALVE, SERVICE, NO.2',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88891H',
        'vehicle_id' => '3',
        
        'description' => 'COVER, COOLER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90467-07164',
        'vehicle_id' => '3',
        
        'description' => 'CLIP',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88460',
        'vehicle_id' => '3',
        
        'description' => 'CONDENSER ASSY, COOLER', 
    ]); 

    DB::table('vehicle_parts')->insert([
        'number' => '88474',
        'vehicle_id' => '3',
        
        'description' => 'DRYER, COOLER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88718-0D310',
        'vehicle_id' => '3',
        
        'description' => 'CLAMP(FOR COOLER REFRIGERANT PIPE), NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14120',
        'vehicle_id' => '3',
        
        'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14119',
        'vehicle_id' => '3',
        
        'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14121',
        'vehicle_id' => '3',
        
        'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88310',
        'vehicle_id' => '3',
        
        'description' => 'COMPRESSOR ASSY, W/PULLEY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87103B',
        'vehicle_id' => '3',
        
        'description' => 'MOTOR SUB-ASSY, BLOWER W/FAN',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87130D',
        'vehicle_id' => '3',
        
        'description' => 'BLOWER ASSY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88515',
        'vehicle_id' => '3',
        
        'description' => 'VALVE, COOLER EXPANSION',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88625',
        'vehicle_id' => '3',
        
        'description' => 'THERMISTOR, COOLER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88650E',
        'vehicle_id' => '3',
        
        'description' => 'AMPLIFIER ASSY, AIR CONDITIONER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88548B',
        'vehicle_id' => '3',
        
        'description' => 'CASE, AIR FILTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87050',
        'vehicle_id' => '3',
        
        'description' => 'RADIATOR ASSY, AIR CONDITIONER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88539J',
        'vehicle_id' => '3',
        
        'description' => 'HOSE, DRAIN COOLER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87138C',
        'vehicle_id' => '3',
        
        'description' => 'RESISTOR, BLOWER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '87124B',
        'vehicle_id' => '3',
        
        'description' => 'CLAMP, HEATER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '88501',
        'vehicle_id' => '3',
        
        'description' => 'EVAPORATOR SUB-ASSY, COOLER, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-04542',
        'vehicle_id' => '3',
        
        'description' => 'BOLT(FOR COOLER EXPANSION VALVE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14120',
        'vehicle_id' => '3',
        
        'description' => 'O-RING, COOLER EVAPORATOR NO.1(DISCHARGE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14119',
        'vehicle_id' => '3',
          
        'description' => 'O-RING, COOLER EVAPORATOR NO.2(DISCHARGE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90099-14121',
        'vehicle_id' => '3',
          
        'description' => 'O-RING, COOLER EVAPORATOR NO.1(SUCTION)',
    ]);
    DB::table('vehicle_parts')->insert([
        'number' => '28800J',
        'vehicle_id' => '3',
        
        'description' => 'TERMINAL, BATTERY NEGATIVE',
    ]);
    
    DB::table('vehicle_parts')->insert([
        'number' => '28800A',
        'vehicle_id' => '3',
        
        'description' => 'TERMINAL, BATTERY POSITIVE',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28800',
        'vehicle_id' => '3',
        
        'description' => 'BATTERY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90178-T0019',
        'vehicle_id' => '3',
        
        'description' => 'NUT (FOR TRANSMISSION CONTROL CABLE)',
    ]);
    
    DB::table('vehicle_parts')->insert([
        'number' => '27330',
        'vehicle_id' => '3',
        
        'description' => 'ROTOR ASSY, ALTERNATOR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27020',
        'vehicle_id' => '3',
        
        'description' => 'ALTERNATOR ASSY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27370A',
        'vehicle_id' => '3',
        
        'description' => 'HOLDER ASSY, ALTERNATOR BRUSH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27360',
        'vehicle_id' => '3',
        
        'description' => 'COIL ASSY, ALTERNATOR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27039',
        'vehicle_id' => '3',
        
        'description' => 'COVER, ALTERNATOR REAR END',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27020E',
        'vehicle_id' => '3',
        
        'description' => 'BOLT(FOR ALTERNATOR)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '16381D',
        'vehicle_id' => '3',
        
        'description' => 'BAR, FAN BELT ADJUSTING',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27310',
        'vehicle_id' => '3',
        
        'description' => 'FRAME ASSY, DRIVE END, ALTERNATOR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90068-00022',
        'vehicle_id' => '3',
        
        'description' => 'SCREW(FOR ALTERNATOR DRIVE END FRAME)',
    ]);
    DB::table('vehicle_parts')->insert([
        'number' => '90068-04046',
        'vehicle_id' => '3',
        
        'description' => 'BOLT(FOR ALTERNATOR REAR END COVER)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90068-00023',
        'vehicle_id' => '3',
        
        'description' => 'SCREW(FOR ALTERNATOR BRUSH HOLDER)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27312',
        'vehicle_id' => '3',
        
        'description' => 'PLATE, RETAINER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27310B',
        'vehicle_id' => '3',
        
        'description' => 'BEARING(FOR ALTERNATOR DRIVE END FRAME)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27384',
        'vehicle_id' => '3',
        
        'description' => 'WASHER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27446A',
        'vehicle_id' => '3',
        
        'description' => 'CLAMP',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27411',
        'vehicle_id' => '3',
        
        'description' => 'PULLEY, ALTERNATOR',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '27387B',
        'vehicle_id' => '3',
        
        'description' => '	INSULATOR, ALTERNATOR TERMINAL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90068-05009',
        'vehicle_id' => '3',
        
        'description' => 'NUT(FOR ALTERNATOR PULLEY)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28100',
        'vehicle_id' => '3',
        
        'description' => 'STARTER ASSY',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28011',
        'vehicle_id' => '3',
        
        'description' => 'CLUTCH SUB-ASSY, STARTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28150',
        'vehicle_id' => '3',
        
        'description' => 'SWITCH ASSY, MAGNET STARTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28120',
        'vehicle_id' => '3',
        
        'description' => 'YOKE ASSY, STARTER',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28120A',
        'vehicle_id' => '3',
        
        'description' => 'RING, O(FOR STARTER YOKE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28142A',
        'vehicle_id' => '3',
        
        'description' => 'STARTER KIT',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '28160',
        'vehicle_id' => '3',
        
        'description' => 'ARMATURE ASSY, STARTER',
    ]);
    
    DB::table('vehicle_parts')->insert([
        'number' => '91612-61065',
        'vehicle_id' => '3',
        
        'description' => 'BOLT(FOR TRANSAXLE & ENGINE SETTING)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '281402',
        'vehicle_id' => '3',
        
        'description' => 'HOLDER ASSY, STARTER BRUSH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '91551-80625',
        'vehicle_id' => '3',
        
        'description' => 'BOLT(FOR CAMSHAFT HOUSING SET)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '19500D',
        'vehicle_id' => '3',
        
        'description' => 'COIL, IGNITION, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '19500-F',
        'vehicle_id' => '3',
        
        'description' => 'CAP, PLUG',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '19100P',
        'vehicle_id' => '3',
        
        'description' => 'PLUG, SPARK',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42611G',
        'vehicle_id' => '3',
        
        'description' => 'VALVE (FOR TUBELESS TIRE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42611J',
        'vehicle_id' => '3',
        
        'description' => 'VALVE (FOR TUBELESS TIRE SPARE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42601C',
        'vehicle_id' => '3',
        
        'description' => 'NUT, HUB (FOR AXLE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42601A',
        'vehicle_id' => '3',
        
        'description' => 'WHEEL, DISC (FOR SPARE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42601',
        'vehicle_id' => '3',
        
        'description' => 'WHEEL, DISC',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42652',
        'vehicle_id' => '3',
        
        'description' => 'TIRE',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42652A',
        'vehicle_id' => '3',
        
        'description' => 'TIRE (FOR SPARE)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42603',
        'vehicle_id' => '3',
        
        'description' => 'ORNAMENT SUB-ASSY, WHEEL HUB',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42621',
        'vehicle_id' => '3',
        
        'description' => 'CAP, WHEEL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42603',
        'vehicle_id' => '3',
        
        'description' => 'ORNAMENT SUB-ASSY, WHEEL HUB',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42621',
        'vehicle_id' => '3',
        
        'description' => 'CAP, WHEEL',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90942-03204',
        'vehicle_id' => '3',
        
        'description' => 'WEIGHT, BALANCE (FOR DISC WHEEL)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48815',
        'vehicle_id' => '3',
        
        'description' => 'BUSH, FRONT STABILIZER BAR, NO.1',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48811',
        'vehicle_id' => '3',
        
        'description' => 'BAR, STABILIZER, FRONT',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48684A',
        'vehicle_id' => '3',
        
        'description' => 'COVER, FRONT SUSPENSION SUPPORT DUST, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48684B',
        'vehicle_id' => '3',
        
        'description' => 'COVER, FRONT SUSPENSION SUPPORT DUST, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48682A',
        'vehicle_id' => '3',
        
        'description' => 'SUPPORT, FRONT SUSPENSION, NO.2 RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48682B',
        'vehicle_id' => '3',
        
        'description' => 'SUPPORT, FRONT SUSPENSION, NO.2 LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48619',
        'vehicle_id' => '3',
        
        'description' => 'BEARING, STRUT MOUNTING, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48619A',
        'vehicle_id' => '3',
        
        'description' => 'BEARING, STRUT MOUNTING, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48603D',
        'vehicle_id' => '3',
        
        'description' => 'NUT(FOR FRONT SUPPORT TO FRONT SHOCK ABSORBER RH)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48609E',
        'vehicle_id' => '3',
        
        'description' => 'NUT(FOR FRONT SUPPORT TO FRONT SHOCK ABSORBER LH)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48603',
        'vehicle_id' => '3',
        
        'description' => 'SUPPORT SUB-ASSY, FRONT SUSPENSION, RH',
    ]);

    
    DB::table('vehicle_parts')->insert([
        'number' => '48609',
        'vehicle_id' => '3',
        
        'description' => 'SUPPORT SUB-ASSY, FRONT SUSPENSION, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48510',
        'vehicle_id' => '3',
        
        'description' => 'ABSORBER ASSY, SHOCK, FRONT RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48520',
        'vehicle_id' => '3',
        
        'description' => 'ABSORBER ASSY, SHOCK, FRONT LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48824A',
        'vehicle_id' => '3',
        
        'description' => 'BRACKET, FRONT STABILIZER, NO.1 RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48829A',
        'vehicle_id' => '3',
        
        'description' => 'BRACKET, FRONT STABILIZER, NO.1 LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48820B',
        'vehicle_id' => '3',
        
        'description' => 'LINK ASSY, FRONT STABILIZER, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48810',
        'vehicle_id' => '3',
        
        'description' => 'LINK ASSY, FRONT STABILIZER, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48331B',
        'vehicle_id' => '3',
        
        'description' => 'BUMPER, FRONT SPRING, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48331C',
        'vehicle_id' => '3',
        
        'description' => 'BUMPER, FRONT SPRING, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48131',
        'vehicle_id' => '3',
        
        'description' => 'SPRING, FRONT COIL, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48820A',
        'vehicle_id' => '3',
        
        'description' => 'NUT(FOR FRONT STABILIZER LINK)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48132',
        'vehicle_id' => '3',
        
        'description' => 'SPRING, FRONT COIL, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48471B',
        'vehicle_id' => '3',
        
        'description' => 'SEAT, FRONT COIL SPRING, UPPER RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48471C',
        'vehicle_id' => '3',
        
        'description' => 'SEAT, FRONT COIL SPRING, UPPER LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48157B',
        'vehicle_id' => '3',
        
        'description' => 'INSULATOR, FRONT COIL SPRING, UPPER RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48157C',
        'vehicle_id' => '3',
        
        'description' => 'INSULATOR, FRONT COIL SPRING, UPPER LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '42110F',
        'vehicle_id' => '3',
        
        'description' => 'BEAM ASSY, REAR AXLE',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48725F',
        'vehicle_id' => '3',
        
        'description' => 'BUSH, REAR AXLE CARRIER, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '90170-T0011',
        'vehicle_id' => '3',
        
        'description' => 'NUT(FOR CLUTCH PEDAL STOPPER)',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48597A',
        'vehicle_id' => '3',
        
        'description' => 'RETAINER, REAR SHOCK ABSORBER CUSHION',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48750H',
        'vehicle_id' => '3',
        
        'description' => 'SUPPORT ASSY, REAR SUSPENSION, RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48760B',
        'vehicle_id' => '3',
        
        'description' => 'SUPPORT ASSY REAR SUSPENSION, LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48257C',
        'vehicle_id' => '3',
        
        'description' => 'INSULATOR, REAR COIL SPRING, UPPER RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48259A',
        'vehicle_id' => '3',
        
        'description' => 'INSULATOR, REAR COIL SPRING, UPPER LH',
    ]);
    
    DB::table('vehicle_parts')->insert([
        'number' => '48231A',
        'vehicle_id' => '3',
        
        'description' => 'SPRING, COIL, REAR RH',
    ]);
     
    DB::table('vehicle_parts')->insert([
        'number' => '48231B',
        'vehicle_id' => '3',
        
        'description' => 'SPRING, COIL, REAR LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48258B',
        'vehicle_id' => '3',
        
        'description' => 'INSULATOR, REAR COIL SPRING, LOWER RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48258C',
        'vehicle_id' => '3',
        
        'description' => 'INSULATOR, REAR COIL SPRING, LOWER LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48755',
        'vehicle_id' => '3',
        
        'description' => 'SUPPORT, REAR SUSPENSION',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48752A',
        'vehicle_id' => '3',
        
        'description' => 'STOPPER, REAR SUSPENSION SUPPORT',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48530',
        'vehicle_id' => '3',
        
        'description' => 'ABSORBER ASSY, SHOCK, REAR RH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48540',
        'vehicle_id' => '3',
        
        'description' => 'ABSORBER ASSY, SHOCK, REAR LH',
    ]);

    DB::table('vehicle_parts')->insert([
        'number' => '48725G',
        'vehicle_id' => '3',
        
        'description' => 'BUSH, REAR AXLE CARRIER, LH',
    ]);

    }
}

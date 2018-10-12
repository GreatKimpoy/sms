<?php

use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //------------------------------------TIRE SERVICE-----------------------------------------
        DB::table('steps')->insert([
            'service_id' => '9',
            'sequence' => '1',
            'description' => '- If vehicle is not still jacked up, jack up vehicle on one side enough so that both side tires are off the ground. 
            - Use air impact wrench and socket to remove all lug nuts from both tires.
            - Lift off both tires and set aside.',
            'time_consumed' => '15',
        ]);

        DB::table('steps')->insert([
            'service_id' => '9',
            'sequence' => '2',
            'description' => 'While the tires are off, look at brake pad to make sure there is plenty of pad left.',
            'time_consumed' => '5',
        ]);
        
        DB::table('steps')->insert([
            'service_id' => '9',
            'sequence' => '3',
            'description' => '- Rotate tires. Move front tire to back and back tire to front.
            - Place tires back on lugs. 
            - Screw lug nuts back on. 
            - Let vehicle off car jack.
            - Repeat steps 1 through 3 on opposite side.',
            'time_consumed' => '25',
        ]);

        DB::table('steps')->insert([
            'service_id' => '9',
            'sequence' => '4',
            'description' => '- Look on the tires to find the desired PSI the tires should be inflated to.
            - Use pressure gauge to check pressure in all four tires.
            - Use air nozzle to inflate if needed.',
            'time_consumed' => '15',
        ]);

    //------------------------------------FUEL INJECTION SYSTEM-----------------------------------------

        DB::table('steps')->insert([
            'service_id' => '1',
            'sequence' => '1',
            'description' => 'Fuel injection is used to supply an internal combustion engine with the proper amount of fuel at any given engine speed. Once fuel enters the fuel tank its picked up by the fuel pump which is situated inside the gas tank. This fuel pump is controlled by a relay located in the PDC power distribution center.',
            'time_consumed' => '5',
        ]);

        DB::table('steps')->insert([
            'service_id' => '1',
            'sequence' => '2',
            'description' => 'Once pressurized, the fuel travels along the bottom of the vehicle through fuel lines toward the fuel filter.',
            'time_consumed' => '12',
        ]);

        DB::table('steps')->insert([
            'service_id' => '1',
            'sequence' => '3',
            'description' => 'Fuel then travels to the fuel filter where its cleaned before continuing to the injection rail.',
            'time_consumed' => '8',
        ]);

        DB::table('steps')->insert([
            'service_id' => '1',
            'sequence' => '4',
            'description' => 'After being cleansed by the fuel filter, pressurized fuel enters the fuel rail where its distributed to individual injectors.',
            'time_consumed' => '15',
        ]);

        DB::table('steps')->insert([
            'service_id' => '1',
            'sequence' => '5',
            'description' => 'A fuel pressure regulator is used to maintain and adjust pressure while the engine is in use, this device is only used in fuel return style injection systems. Some fuel injected vehicles are fitted with a regulator at the fuel pump.',
            'time_consumed' => '10',
        ]);

        DB::table('steps')->insert([
            'service_id' => '1',
            'sequence' => '6',
            'description' => 'A fuel injector is used to disperse fuel at precise intervals which is controlled by the computer and adjusts as engine speeds vary.',
            'time_consumed' => '15',
        ]);

        
    //------------------------------------BATTERIES-----------------------------------------

        DB::table('steps')->insert([
            'service_id' => '6',
            'sequence' => '1',
            'description' => 'Check your vehicle owners manual for the your car battery’s location.',
            'time_consumed' => '2',
        ]);

        DB::table('steps')->insert([
            'service_id' => '6',
            'sequence' => '2',
            'description' => 'Identify the positive and negative posts and the respective cables attached to each.',
            'time_consumed' => '3',
        ]);

        DB::table('steps')->insert([
            'service_id' => '6',
            'sequence' => '3',
            'description' => 'Using a wrench, loosen the nut or bolt that secures the negative terminal and cable to the negative battery post.',
            'time_consumed' => '5',
        ]);

        DB::table('steps')->insert([
            'service_id' => '6',
            'sequence' => '4',
            'description' => 'Once you loosen the bolt or nut, first use the terminal puller to remove the cable and terminal from the negative battery post. Do the same with the positive terminal.',
            'time_consumed' => '10',
        ]);

        DB::table('steps')->insert([
            'service_id' => '6',
            'sequence' => '5',
            'description' => 'Remove the clamp or retaining system holding the battery in place and set the parts and fasteners aside where to avoid spilling or misplacing them.',
            'time_consumed' => '2',
        ]);

        DB::table('steps')->insert([
            'service_id' => '6',
            'sequence' => '6',
            'description' => 'Carefully lift the battery out without jostling it too much. If the posts are located on top of the battery, as opposed to on the side, you can use the battery carrying strap.',
            'time_consumed' => '4',
        ]);

        DB::table('steps')->insert([
            'service_id' => '6',
            'sequence' => '7',
            'description' => 'Examine the terminals attached to the ends of the battery cables to ensure they’re clean and corrosion-free. If they’re not, clean them using the terminal-cleaning tool.',
            'time_consumed' => '8',
        ]);

        DB::table('steps')->insert([
            'service_id' => '6',
            'sequence' => '8',
            'description' => 'Position the battery so that the red, positive post will match up to the positive terminal and cable’s location.',
            'time_consumed' => '5',
        ]);

        DB::table('steps')->insert([
            'service_id' => '6',
            'sequence' => '9',
            'description' => 'Insert the new battery. Then secure it with the clamp or retaining system removed earlier.',
            'time_consumed' => '5',
        ]);

        DB::table('steps')->insert([
            'service_id' => '6',
            'sequence' => '10',
            'description' => 'Remove the plastic caps that cover the battery posts and install the anti-corrosion washers over them.',
            'time_consumed' => '5',
        ]);

        DB::table('steps')->insert([
            'service_id' => '6',
            'sequence' => '11',
            'description' => 'Apply a thin layer of grease to the battery posts and terminals before connecting the positive terminal to the positive post first.',
            'time_consumed' => '3',
        ]);

        DB::table('steps')->insert([
            'service_id' => '6',
            'sequence' => '12',
            'description' => 'Try to wiggle the battery. If it moves, tighten the clamp or retaining system. You are finished installing a car battery!',
            'time_consumed' => '2',
        ]);

    //------------------------------------------------------FAN BELT------------------------------------------------------

        DB::table('steps')->insert([
            'service_id' => '2',
            'sequence' => '1',
            'description' => ' Replace a Belt.Test the belts for tension and inspect for any cracks or wear, especially uneven wear. If you spot any, then it’s time to change the belt.',
            'time_consumed' => '1',
        ]);

        DB::table('steps')->insert([
            'service_id' => '2',
            'sequence' => '2',
            'description' => 'Preparing to Change the Belt.',
            'time_consumed' => '5',
        ]);

        DB::table('steps')->insert([
            'service_id' => '2',
            'sequence' => '3',
            'description' => 'Removing the Belt. To remove it, you’ll need to loosen the tensioner on one of them.',
            'time_consumed' => '2',
        ]);

        DB::table('steps')->insert([
            'service_id' => '2',
            'sequence' => '4',
            'description' => 'Finding a New Belt. Select a matching belt of about the same length, preferably slightly smaller, but most certainly not any longer.',
            'time_consumed' => '2',
        ]);

        DB::table('steps')->insert([
            'service_id' => '2',
            'sequence' => '5',
            'description' => 'Fitting the Belt. With the tensioner loosened, slip the belt over the other pulleys then ease it over the pulley with the tensioner. With a V belt, make sure the V is fitted evenly on the pulleys. In the case of a serpentine belt, ensure the belt lines up properly on all the pulleys. Tighten the tensioner to the point it had been before. Don’t over tighten it. Try moving the belt manually. As a general rule of thumb, you should only be able to move it a little, about half a turn of the pulley, before feeling some resistance.',
            'time_consumed' => '15',
        ]);

        DB::table('steps')->insert([
            'service_id' => '10',
            'sequence' => '1',
            'description' => 'Next, drive the vehicle onto your alignment rack. Chock wheels and raise lift to a comfortable and safe work height, then lock the rack. Lift the vehicle by the center jacks of the alignment rack, suspending the wheels. This will allow you to check tires for uneven, irregular wear, as well as to visually check the front-end and rear axle for any compromised suspension or steering components. If there is a bad ball joint, tie-rod end, broken coil spring, loose wheel bearing, or any other problem with the suspension or steering, the component needs to be replaced before the alignment is performed.',
            'time_consumed' => '30',
        ]);
        DB::table('steps')->insert([
            'service_id' => '10',
            'sequence' => '2',
            'description' => 'Next, check and adjust tire pressures to OEM specification; some systems have an automatic inflation feature. Remove hubcaps if present.',
            'time_consumed' => '15',
        ]);
        DB::table('steps')->insert([
            'service_id' => '10',
            'sequence' => '3',
            'description' => 'Mount targets to wheel ends as required by the rack manufacturer. Most alignment racks require the alignment heads be attached to all four wheels, even if no adjustments are made to the rear wheels. With many FWD vehicles, adjustments can be made to the rear and should be performed before the front wheel alignment adjustments are made.',
            'time_consumed' => '20',
        ]);
        DB::table('steps')->insert([
            'service_id' => '10',
            'sequence' => '4',
            'description' => 'Depending on your alignment equipment and system, there are unique procedures that will measure the current camber, caster and toe angles of the vehicle and report that information either on a print-out or on a diagnostic screen. Some systems even print a “symptom report” that you can show the customer, which explains the potential damage to tire health if alignment issues are not corrected.',
            'time_consumed' => '30',
        ]);
        DB::table('steps')->insert([
            'service_id' => '10',
            'sequence' => '5',
            'description' => 'If the rear alignment needs to be adjusted, this has to be performed before working on front-end adjustments.',
            'time_consumed' => '20',
        ]);
        DB::table('steps')->insert([
            'service_id' => '10',
            'sequence' => '6',
            'description' => 'With front-end alignments, correct caster and camber adjustments first. Certain FWD vehicles do not offer caster adjustments, but correcting the camber may bring the caster within specs.',
            'time_consumed' => '30',
        ]);
        DB::table('steps')->insert([
            'service_id' => '10',
            'sequence' => '7',
            'description' => 'With caster and camber adjusted, then adjust toe angles.',
            'time_consumed' => '30',
        ]);
        DB::table('steps')->insert([
            'service_id' => '10',
            'sequence' => '8',
            'description' => ' Restart the car, remove the steering wheel lock, turn the steering wheel back and forth a couple times, then re-center and replace the steering wheel lock. Recheck alignment specifications, and then readjust angles as necessary.',
            'time_consumed' => '15',
        ]);
        DB::table('steps')->insert([
            'service_id' => '10',
            'sequence' => '9',
            'description' => 'Remove the alignment heads and lower the vehicle.',
            'time_consumed' => '15',
        ]);
        DB::table('steps')->insert([
            'service_id' => '10',
            'sequence' => '10',
            'description' => 'Complete the alignment by taking a test drive to ensure any previously noted symptoms are gone or can be attributed to other vehicle issues (such as vibrations caused by worn suspension parts).',
            'time_consumed' => '30',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '1',
            'description' => 'The kit is supplied with a number of spacers, for both the bracket and mounting the compressor to the bracket. Using a straight edge in the belt grooves helps to line up the compressor, power steering and crank pulleys',
            'time_consumed' => '15',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '2',
            'description' => 'Remove the bonnet latch mechanism, slide the condenser into place and fasten it to the radiator support panel by the tabs on each side. The condenser receives very hot compressed gas from the compressor, and the heat difference between the compressed refrigerant gas and the air passing through causes the refrigerant to condense back into liquid',
            'time_consumed' => '10',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '3',
            'description' => 'The receiver/dryer receives liquid refrigerant from the bottom of the condenser. Ensure there is a reservoir of liquid coolant to draw from and also removes any moisture. It’s often fitted next to the condenser, tuck it up behind the passenger-side headlight panel. A pressure switch that turns the compressor on and off is supplied, and must be fitted',
            'time_consumed' => '20',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '4',
            'description' => 'Step drill to make a hole for the return line to the compressor from the evaporator.The braided lines are the feed and return lines for the heater core. The feed and return for the air-conditioning system are routed next to them behind the suspension.',
            'time_consumed' => '6',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '5',
            'description' => 'Fix wrong belt tension to remove the cause of problems in  air-conditioning system. An idler/tensioner pulley is part of the kit and bolts to the front plate of the compressor bracket. Use a spanner to adjust for the correct tension on the belt',
            'time_consumed' => '20',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '6',
            'description' => 'Supply ample hose for the job. Run the hoses where you want them and cut to length. Use a proper hose-cutter and have a nice clean cut. Torn up all ends (inset, lower left hose) to increase the likelihood of leaks.',
            'time_consumed' => '15',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '7',
            'description' => 'Cut lengths of the hose to have a natural curvature. This can be used to your advantage to bypass obstacles. Mark their orientation within the fittings.',
            'time_consumed' => '5',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '8',
            'description' => 'Make the convoluted aluminium bracket in order to attach the front strap to an existing point under the dash.',
            'time_consumed' => '10',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '9',
            'description' => ' Removing the glovebox to provide better access to the rear of the dash, and to allows the new heater tap supplied with the kit to be fitted out of the way behind it. Old coolant lines will meet the new ones leading to the heater core. The line from the pump is attached to the tap (top hose), other is joined (bottom hose).',
            'time_consumed' => '20',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '10',
            'description' => ' The hoses for the heater core are coming in from the upper right. The lower air-conditioning hose comes from the receiver/dryer while the thicker unit is the return line to the inlet of the compressor. A supplied hose attaches to the elbow on the underside of the unit to drain moisture outside the cabin (inset)',
            'time_consumed' => '10',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '11',
            'description' => 'The sensor tube from the thermostat is placed in the labelled hole (inset)',
            'time_consumed' => '5',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '12',
            'description' => 'The copper tube is the thermal expansion (TX) valve. A sensor coil on the end of the tube must located in the evaporator outlet. The two copper fittings behind the connection points for the heater core',
            'time_consumed' => '14',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '13',
            'description' => 'Hold of some OE kick-panel vents for his installation.The two half-circle outlets on the top of the unit on the firewall side are for the elongated windscreen vents. The three outlets on the cabin side of the unit for the side and centre vents. Ducts push onto the outlets and retained by small gripping barbs',
            'time_consumed' => '20',
        ]);
        DB::table('steps')->insert([
            'service_id' => '4',
            'sequence' => '14',
            'description' => 'Under-dash control panel fits above the console and doesn’t look out of place. The soft-grip knobs  have an outward flare at least slightly suggestive of the factory XY knobs',
            'time_consumed' => '35',
        ]);

    
    
    }
}
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
    
    }
}

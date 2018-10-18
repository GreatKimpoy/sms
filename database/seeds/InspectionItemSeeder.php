<?php

use Illuminate\Database\Seeder;

class InspectionItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inspection_items')->insert([
            'name' => 'Head Light',
            'form' => '[
                            {
                                "type": "radio-group",
                                "label": "Rating",
                                "inline": true,
                                "className": "",
                                "name": "radio-group-1495719902602",
                                "values": [
                                    {
                                        "label": "😃",
                                        "value": "1"
                                    },
                                    {
                                        "label": "😐",
                                        "value": "2"
                                    },
                                    {
                                        "label": "☹️",
                                        "value": "3"
                                    }
                                ]
                            },
                            {
                                "type": "text",
                                "required": false,
                                "label": "Condition",
                                "className": "form-control",
                                "name": "text-1502452865914",
                                "subtype": "text"
                            },
                        ]',
            'type_id' => 1,
            'Active' => 1
        ]);

        DB::table('inspection_items')->insert([
            'name' => 'Tail Light',
            'form' => '[
                            {
                                "type": "radio-group",
                                "label": "Rating",
                                "inline": true,
                                "className": "",
                                "name": "radio-group-1495720031404",
                                "values": [
                                    {
                                        "label": "😃",
                                        "value": "1",
                                    },
                                    {
                                        "label": "😐",
                                        "value": "2"
                                    },
                                    {
                                        "label": "☹️",
                                        "value": "3"
                                    }
                                ]
                            },
                             {
                                "type": "text",
                                "required": false,
                                "label": "Condition",
                                "className": "form-control",
                                "name": "text-1502452865914",
                                "subtype": "text"
                            },
                        ]',
            'type_id' => 1,
            'Active' => 1
        ]);

        DB::table('inspection_items')->insert([
            'name' => 'Front Left Tire',
            'form' => '[
                    {
                        "type": "radio-group",
                        "label": "Rating",
                        "inline": true,
                        "name": "radio-group-1502452774374",
                        "values": [
                            {
                                "label": "😃",
                                "value": "1",
                            },
                            {
                                "label": "😐",
                                "value": "2"
                            },
                            {
                                "label": "☹️",
                                "value": "3"
                            }
                        ]
                    },
                     {
                        "type": "text",
                        "required": false,
                        "label": "Condition",
                        "className": "form-control",
                        "name": "text-1502452865914",
                        "subtype": "text"
                    },
                   
                ]',
            'type_id' => 2,
            'Active' => 1
        ]);

        DB::table('inspection_items')->insert([
            'name' => 'Front Right Tire',
            'form' => '[
                    {
                        "type": "radio-group",
                        "label": "Rating",
                        "inline": true,
                        "name": "radio-group-1502452815378",
                        "values": [
                            {
                                "label": "😃",
                                "value": "1",
                            },
                            {
                                "label": "😐",
                                "value": "2"
                            },
                            {
                                "label": "☹️",
                                "value": "3"
                            }
                        ]
                    },
                     {
                        "type": "text",
                        "required": false,
                        "label": "Condition",
                        "className": "form-control",
                        "name": "text-1502452865914",
                        "subtype": "text"
                    },                   
                ]',
            'type_id' => 2,
            'Active' => 1
        ]);
        
        DB::table('inspection_items')->insert([
            'name' => 'Rear Left Tire',
            'form' => '[
                    {
                        "type": "radio-group",
                        "label": "Rating",
                        "inline": true,
                        "name": "radio-group-1502452839609",
                        "values": [
                            {
                                "label": "😃",
                                "value": "1",
                            },
                            {
                                "label": "😐",
                                "value": "2"
                            },
                            {
                                "label": "☹️",
                                "value": "3"
                            }
                        ]
                    },
                    {
                        "type": "text",
                        "required": false,
                        "label": "Condition",
                        "className": "form-control",
                        "name": "text-1502452865914",
                        "subtype": "text"
                    },
                
                ]',
            'type_id' => 2,
            'Active' => 1
        ]);

        DB::table('inspection_items')->insert([
            'name' => 'Rear Right Tire',
            'form' => '[
                    {
                        "type": "radio-group",
                        "label": "Rating",
                        "inline": true,
                        "name": "radio-group-1502452861959",
                        "values": [
                            {
                                "label": "😃",
                                "value": "1",
                            },
                            {
                                "label": "😐",
                                "value": "2"
                            },
                            {
                                "label": "☹️",
                                "value": "3"
                            }
                        ]
                    },
                    {
                        "type": "text",
                        "required": false,
                        "label": "Condition",
                        "className": "form-control",
                        "name": "text-1502452865914",
                        "subtype": "text"
                    },
                  
                ]',
            'type_id' => 2,
            'Active' => 1
        ]);
    }
}

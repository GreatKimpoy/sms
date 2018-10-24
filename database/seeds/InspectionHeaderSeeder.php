<?php

use Illuminate\Database\Seeder;

class InspectionHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('inspection_headers')->insert([
            'inspection_id' => '1',
            'item_id' => '1',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"className":"","name":"radio-group-1495719902602","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"text","label":"Condition","placeholder":"Condition","className":"form-control","name":"text-1495719902626","subtype":"text","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '1',
            'item_id' => '2',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"className":"","name":"radio-group-1495720031404","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"text","label":"Condition","placeholder":"Condition","className":"form-control","name":"text-1495720031415","subtype":"text","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '1',
            'item_id' => '3',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452774374","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452774397","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '1',
            'item_id' => '4',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452815378","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452815386","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '1',
            'item_id' => '5',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452839609","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452839621","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '1',
            'item_id' => '6',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452861959","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452861966","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '2',
            'item_id' => '1',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"className":"","name":"radio-group-1495719902602","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"text","label":"Condition","placeholder":"Condition","className":"form-control","name":"text-1495719902626","subtype":"text","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '2',
            'item_id' => '2',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"className":"","name":"radio-group-1495720031404","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"text","label":"Condition","placeholder":"Condition","className":"form-control","name":"text-1495720031415","subtype":"text","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '2',
            'item_id' => '3',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452774374","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452774397","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '2',
            'item_id' => '4',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452815378","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452815386","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '2',
            'item_id' => '5',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452839609","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452839621","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '2',
            'item_id' => '6',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452861959","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452861966","subtype":"textarea","maxlength":"100"}]',
        ]);

        DB::table('inspection_headers')->insert([
            'inspection_id' => '3',
            'item_id' => '1',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"className":"","name":"radio-group-1495719902602","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"text","label":"Condition","placeholder":"Condition","className":"form-control","name":"text-1495719902626","subtype":"text","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '3',
            'item_id' => '2',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"className":"","name":"radio-group-1495720031404","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"text","label":"Condition","placeholder":"Condition","className":"form-control","name":"text-1495720031415","subtype":"text","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '3',
            'item_id' => '3',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452774374","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452774397","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '3',
            'item_id' => '4',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452815378","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452815386","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '3',
            'item_id' => '5',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452839609","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452839621","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '3',
            'item_id' => '6',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452861959","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452861966","subtype":"textarea","maxlength":"100"}]',
        ]);

        DB::table('inspection_headers')->insert([
            'inspection_id' => '4',
            'item_id' => '1',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"className":"","name":"radio-group-1495719902602","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"text","label":"Condition","placeholder":"Condition","className":"form-control","name":"text-1495719902626","subtype":"text","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '4',
            'item_id' => '2',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"className":"","name":"radio-group-1495720031404","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"text","label":"Condition","placeholder":"Condition","className":"form-control","name":"text-1495720031415","subtype":"text","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '4',
            'item_id' => '3',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452774374","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452774397","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '4',
            'item_id' => '4',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452815378","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452815386","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '4',
            'item_id' => '5',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452839609","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452839621","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '4',
            'item_id' => '6',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452861959","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452861966","subtype":"textarea","maxlength":"100"}]',
        ]);

        DB::table('inspection_headers')->insert([
            'inspection_id' => '5',
            'item_id' => '1',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"className":"","name":"radio-group-1495719902602","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"text","label":"Condition","placeholder":"Condition","className":"form-control","name":"text-1495719902626","subtype":"text","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '5',
            'item_id' => '2',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"className":"","name":"radio-group-1495720031404","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"text","label":"Condition","placeholder":"Condition","className":"form-control","name":"text-1495720031415","subtype":"text","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '5',
            'item_id' => '3',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452774374","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452774397","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '5',
            'item_id' => '4',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452815378","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452815386","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '5',
            'item_id' => '5',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452839609","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452839621","subtype":"textarea","maxlength":"100"}]',
        ]);
        DB::table('inspection_headers')->insert([
            'inspection_id' => '5',
            'item_id' => '6',
            'remarks' => '[{"type":"radio-group","required":true,"label":"Rating","inline":true,"name":"radio-group-1502452861959","values":[{"label":"😃","value":"1","selected":true},{"label":"😐","value":"2"},{"label":"☹️","value":"3"}]},{"type":"textarea","label":"Condition","placeholder":"Condition","className":"form-control","name":"textarea-1502452861966","subtype":"textarea","maxlength":"100"}]',
        ]);
    }
}

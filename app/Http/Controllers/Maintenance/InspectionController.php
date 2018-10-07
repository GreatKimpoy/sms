<?php

namespace App\Http\Controllers\Maintenance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\InspectionType;
use Validator;
use DB; 
use Redirect;
use App\InspectionItem;
use Illuminate\Validation\Rule;

class InspectionController extends Controller
{
     public $viewBasePath = 'admin.maintenance';

    /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $inspections = InspectionType::where('active',1)->get(); 
        $deactivate = InspectionType::where('active',0)->get(); 
        return View($this->viewBasePath.'.inspection.index', compact('inspections','deactivate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //        
        return view( $this->viewBasePath . '.inspection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'type' => ['required','max:50','unique:inspection_types','regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
            'item.*' => ['required','max:50','regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
            'inspectionForm.*' => 'required'
        ];
        $messages = [
            'unique' => ':attribute already exists.',
            'required' => 'The :attribute field is required.',
            'max' => 'The :attribute field must be no longer than :max characters.',
            'regex' => 'The :attribute must not contain special characters.'                
        ];
        $niceNames = [
            'type' => 'Type',
            'item.*' => 'Item',
            'inspectionForm.*'=>'Form'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        $validator->setAttributeNames($niceNames); 
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        else{
            try{
                DB::beginTransaction();
                $type = InspectionType::create([
                    'type' => trim($request->type),
                ]);
                $items = $request->item;
                $forms = $request->inspectionForm;
                foreach ($items as $key=>$item) {
                    InspectionItem::create([
                        'name' => $item,
                        'form' => $forms[$key],
                        'type_id' => $type->id,
                    ]);
                }
                DB::commit();
            }catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $errMess = $e->getMessage();
                return Redirect::back()->withErrors($errMess);
            }
            $request->session()->flash('success', 'Successfully added.');  
            return redirect('inspection');
          
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
            $type = InspectionType::findOrFail($id);
            return View($this ->viewBasePath.'.inspection.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $rules = [
        'type' => ['required','max:50',Rule::unique('inspection_types')->ignore($id),'regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
        'item.*' => ['required','max:50','regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
        'inspectionForm.*' => 'required'
    ];
    $messages = [
        'unique' => ':attribute already exists.',
        'required' => 'The :attribute field is required.',
        'max' => 'The :attribute field must be no longer than :max characters.',
        'regex' => 'The :attribute must not contain special characters.'                
    ];
    $niceNames = [
        'type' => 'Type',
        'item.*' => 'Item',
        'inspectionForm.*'=>'Form'
    ];
    $validator = Validator::make($request->all(),$rules,$messages);
    $validator->setAttributeNames($niceNames); 
    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }
    else{
        try{
            DB::beginTransaction();
            $type = InspectionType::findOrFail($id);
            $type->update([
                'type' => trim($request->type),
            ]);
            InspectionItem::where('type_id', $id)->update(['active' => 0]);
                $items = $request->item;
                $forms = $request->inspectionForm;
                foreach ($items as $key=>$item) {
                    InspectionItem::updateOrCreate(
                        ['name' => $item,'type_id' => $type->id],
                        ['form'=>$forms[$key],'active' => 1]
                    );
                }
            DB::commit();
        }catch(\Illuminate\Database\QueryException $e){
            DB::rollBack();
            $errMess = $e->getMessage();
            return back()->withErrors($errMess);
        }
        $request->session()->flash('success', 'Successfully updated.'); 
        return redirect('inspection');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function getData($id){
        $item = InspectionItem::where('active',1)->get();
        return View('admin.transaction.checkup.form',compact('item'));
    }

}

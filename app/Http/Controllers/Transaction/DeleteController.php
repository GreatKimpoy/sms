<?php

namespace App\Http\Controllers\Transaction;
use DB;
use App\Inspection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function destroy(Request $request, $id)
    {   
       try{
           DB::beginTransaction();
           $inspection = Inspection::findOrFail($id)->update(['isActive'=>0]);
           DB::commit();
       }catch(\Illuminate\Database\QueryException $e){
        DB::rollBack();
        $errMess = $e->getMessage();
        return Redirect::back()->withErrors($errMess);
    }
    return Redirect('checkup');
     
      
        
    }

}


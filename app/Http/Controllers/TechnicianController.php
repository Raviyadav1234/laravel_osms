<?php

namespace App\Http\Controllers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Technician;

class TechnicianController extends Controller
{
    
    public function technician_view(){
        $data = Technician::all();
        return view('admin.technician.index',['item'=>$data]);
    }

    public function technician_index(){
        return view('admin.technician.add');
    }


  public function technician_save(Request $request){
    if (Auth::user()->isAdmin()) { 
        //dd($request->post());
       $request->validate([
        'tech_name'=>'required',
        'tech_city'=>'required',
        'tech_mobile'=>'required',
        'tech_email'=>'required|email|unique:tbl_technician'
        
        
       ]);

    $data = new Technician;
    $data->tech_name = $request->tech_name;
    $data->tech_city = $request->tech_city;
    $data->tech_mobile = $request->tech_mobile;
    $data->tech_email = $request->tech_email;
    $data->save();

    return redirect()->back()->with('success','Technician Added Successfully');

    }else{
            abort(404);
        }
}



public function technician_edit(Request $request){
$id = Crypt::decrypt($request->id);
$data = Technician::where('tech_id','=',$id)->first();
return view('admin.technician.edit',['item'=>$data]);
}


public function technician_update(Request $request){
    if (Auth::user()->isAdmin()) { 
        //dd($request->post());
       $request->validate([
        'tech_name'=>'required',
        'tech_city'=>'required',
        'tech_mobile'=>'required',
        'tech_email'=>'required|email'
       ]);

    $data = Technician::where('tech_id','=',$request->tech_id)->first();
    $data->tech_name = $request->tech_name;
    $data->tech_city = $request->tech_city;
    $data->tech_mobile = $request->tech_mobile;
    $data->tech_email = $request->tech_email;
    $data->save();

    return redirect()->back()->with('success','Technician Updated Successfully');

    }else{
            abort(404);
        }
}


        public function technician_delete(Request $request){
        $id = Crypt::decrypt($request->id);

        $data = Technician::where('tech_id','=',$id)->delete();
        return redirect()->back()->with('danger','Technician Deleted Successfully');
        }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignWork;

class AssignWorkController extends Controller
{
    
    public function assign_work_view(){
        $data = AssignWork::all();
        return view('admin.assign_work',['item'=>$data]);
    }


    public function assign_work_print(Request $request,$id){
       $data = AssignWork::where('request_id','=',$request->id)->first();
       return view('admin.view_assignwork',compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use App\Models\SubmitRequest;
use App\Models\AssignWork;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function assign_request()
    {
        if (Auth::user()->isAdmin()) {
            $requester_data = SubmitRequest::paginate(2);
        return view('admin.request',['requester_datas'=>$requester_data]);
    }else{
        abort(404);
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function requester_delete(Request $request){
    $id = $request->id;
     DB::table('tbl_submitrequest')->where('id','=',$id)->delete();
     return redirect()->back();
    }


    public function requester_view(Request $request){
       $id = $request->id;
       $data = SubmitRequest::where('id','=',$id)->get();
      // dd('yes');
       $requester_data = SubmitRequest::paginate(2);
      return view('admin.request',['requester_datas'=>$requester_data, 'item'=>$data]);
    }



public function assign_request_save(Request $request){
    if (Auth::user()->isAdmin()) { 
        //dd($request->post());
       $request->validate([
        'requester_id'=>'required',
        'request_info'=>'required',
        'request_desc'=>'required',
        'requester_name'=>'required',
        'requester_email'=>'required|email|unique:tbl_assignwork',
        'requester_mobile'=>'required',
        'requester_add1'=>'required',
        'requester_add2'=>'required',
        'requester_city'=>'required',
        'requester_state'=>'required',
        'requester_pin'=>'required',      
        'assign_technician'=>'required',      
        'assign_date'=>'required',
       ]);

    $data = new AssignWork;
    $data->request_id = $request->requester_id;
    $data->request_info = $request->request_info;
    $data->request_desc = $request->request_desc;
    $data->requester_name = $request->requester_name;
     $data->requester_email = $request->requester_email;
    $data->requester_mobile = $request->requester_mobile;
    $data->requester_add1 = $request->requester_add1;
    $data->requester_add2 = $request->requester_add2;
    $data->requester_city = $request->requester_city;
    $data->requester_state = $request->requester_state;
    $data->requester_pin = $request->requester_pin;
    $data->assign_technician = $request->assign_technician;
    $data->assign_date = $request->assign_date;
    $data->save();

    return redirect()->back()->with('success','Assign Work Successfully');

    }else{
            abort(404);
        }
}



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
}

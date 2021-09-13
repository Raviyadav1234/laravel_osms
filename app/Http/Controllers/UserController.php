<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubmitRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function submit_request()
    {
        if (Auth::user()->isUser()){ 
         return view('user.submit_request');   
        
        }else{
            abort(404);
            
        }
    }

     public function check_status()
    {
        if (Auth::user()->isUser()) { 
        return view('user.check_status');
       }else{
            abort(404);
        }

    }

     public function change_password()
    {
        if (Auth::user()->isUser()) { 
        $user = Auth::user()->email;
        $user_data = User::where('email','=',$user)->get(); 
        return view('user.change_password',['user_data'=>$user_data]);
    }else{
            abort(404);
        }

    }

     public function change_password_update(Request $request)
    {
        if (Auth::user()->isUser()) { 
        $id = $request->id;
        $request->validate([
         'old_password'=>'required',
         'new_password'=>'required',
        ]);

        $db_pass = Auth::user()->password;

if(Hash::check($request->old_password, $db_pass)){

if($request->new_password != $request->cnf_password){
    return redirect()->back()->with('msg_error','New Password and Confirm Password should be matched !!');
}else{

        $update_data =[
                'email'=>$request->email,
                'password'=>Hash::make($request->new_password)
                ];

       DB::table('users')->where('id','=',$id)
       ->limit(1)
       ->update($update_data);

 
        //return redirect()->back()->with('success','Password Updated Successfully !!');
        
        Auth::logout(); 
        Session::flush();

        return redirect()->route('login');

 
}

}else{
    return redirect()->back()->with('msg_error','Old Password is Incorrect !!');
}
        
  }else{
            abort(404);
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user_profile_update(Request $request)
    {
        if (Auth::user()->isUser()) { 
        $id = $request->id;
       
        $update_data =[
        'name'=>$request->name,
        'email'=>$request->email,
        ];
       
       DB::table('users')->where('id','=',$id)
       ->limit(1)
       ->update($update_data);
       

        return redirect()->back()->with('success','Profile Updated Successfully');
    }else{
            abort(404);
        }
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_submit_request(Request $request)
    {
        if (Auth::user()->isUser()) { 
        //dd($request->post());
       $request->validate([
        'request_info'=>'required',
        'request_desc'=>'required',
        'requester_name'=>'required',
        'requester_add1'=>'required',
        'requester_add2'=>'required',
        'requester_city'=>'required',
        'requester_state'=>'required',
        'requester_pin'=>'required',
        'requester_email'=>'required|email|unique:tbl_submitrequest',
        'requester_mobile'=>'required',
        'request_date'=>'required',
       ]);

    $data = new SubmitRequest;
    $data->request_info = $request->request_info;
    $data->request_desc = $request->request_desc;
    $data->requester_name = $request->requester_name;
    $data->requester_add1 = $request->requester_add1;
    $data->requester_add2 = $request->requester_add2;
    $data->requester_city = $request->requester_city;
    $data->requester_state = $request->requester_state;
    $data->requester_pin = $request->requester_pin;
    $data->requester_email = $request->requester_email;
    $data->requester_mobile = $request->requester_mobile;
    $data->request_date = $request->request_date;
    $data->save();

    return redirect()->back()->with('success','Request Submitted Successfully');

    }else{
            abort(404);
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


public function email(){

    Mail::send('user.mail',['name'=>'ravi','data'=>'hello ravi'], function($message){
        $message->from('raviyadav2017sln@gmail.com');
        $message->to('raviyadav2017sln@gmail.com', 'elbiheiry')->subject('TODOParrot Feedback');
    });

        return redirect(route('email'));


}


}

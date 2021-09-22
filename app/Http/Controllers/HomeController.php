<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\SubmitRequest;
use App\Models\AssignWork;
use App\Models\Technician;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
 
    if (Auth::user()->isUser()) {  
    $user = Auth::user()->email;
    $user_data = User::where('email','=',$user)->get();   
  return view('user.dashboard',['user_data'=>$user_data]);

    }elseif(Auth::user()->isAdmin()){

        $total_assignwork = AssignWork::select('id')->count();
        $assignwork_data = AssignWork::all();

        $total_requester = SubmitRequest::select('id')->count();
        $requester_data = SubmitRequest::all();

        $total_technician = Technician::select('id')->count();
        $technician_data = SubmitRequest::all();


        return view('admin.dashboard',compact([
            'total_requester','requester_data','total_assignwork','assignwork_data','total_technician','technician_data'
        ])); 
    }
    
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Assets;
use App\Models\Customer;

class AssetsController extends Controller
{
    public function assets_view(){
        $data = Assets::all();
        return view('admin.assets.index',['item'=>$data]);
    }

    public function assets_index(){
        return view('admin.assets.add');
    }


    public function assets_save(Request $request){
    if (Auth::user()->isAdmin()) { 
       $request->validate([
        'product_name'=>'required',
        'product_dop'=>'required',
        'product_available'=>'required',
        'product_total'=>'required',
        'product_originalcost'=>'required',
        'product_sellingcost'=>'required'
        
       ]);


    $data = new Assets;
    $data->product_name = $request->product_name;
    $data->product_dop = $request->product_dop;
    $data->product_available = $request->product_available;
    $data->product_total = $request->product_total;
    $data->product_originalcost = $request->product_originalcost;
    $data->product_sellingcost = $request->product_sellingcost;
    $data->save();

    return redirect()->back()->with('success','Product Added Successfully');

    }else{
            abort(404);
        }
}


        public function assets_edit(Request $request){
        $id = Crypt::decrypt($request->id);
        $data = Assets::where('product_id','=',$id)->first();
        return view('admin.assets.edit',['item'=>$data]);
        }


    public function assets_update(Request $request){
    if (Auth::user()->isAdmin()) { 
        //dd($request->post());
        $request->validate([
        'product_name'=>'required',
        'product_dop'=>'required',
        'product_available'=>'required',
        'product_total'=>'required',
        'product_originalcost'=>'required',
        'product_sellingcost'=>'required'
        
       ]);
    $data = Assets::where('product_id','=',$request->product_id)->first();
    
    $data->product_name = $request->product_name;
    $data->product_dop = $request->product_dop;
    $data->product_available = $request->product_available;
    $data->product_total = $request->product_total;
    $data->product_originalcost = $request->product_originalcost;
    $data->product_sellingcost = $request->product_sellingcost;
    $data->save();
 
    return redirect()->back()->with('success','Product Updated Successfully');

    }else{
            abort(404);
        }
}



    public function assets_delete(Request $request){
    $id = Crypt::decrypt($request->id);

    $data = Assets::where('product_id','=',$id)->delete();
    return redirect()->back()->with('danger','Product Deleted Successfully');
    }



    public function assets_sell(Request $request){
        $id = Crypt::decrypt($request->id);
        $data = Assets::where('product_id','=',$id)->first();
        return view('admin.assets.sellproduct',['item'=>$data]);
    }



    public function assets_sell_save(Request $request){
        if (Auth::user()->isAdmin()) { 
           $request->validate([
            'customer_name'=>'required',
            'customer_address'=>'required',
            'customer_product_name'=>'required',
            'customer_product_quantity'=>'required',
            'customer_product_each'=>'required',
            'customer_product_total'=>'required',
            'customer_product_date'=>'required'
            
           ]);

$product_available=($request->product_available-$request->customer_product_quantity);
        $data = new Customer;
        $data->customer_name = $request->customer_name;
        $data->customer_address = $request->customer_address;
        $data->customer_product_name = $request->customer_product_name;
        $data->customer_product_quantity = $request->customer_product_quantity;
        $data->customer_product_each = $request->customer_product_each;
        $data->customer_product_total = $request->customer_product_total;
        $data->customer_product_date = $request->customer_product_date;
        $data->save();

        if($data->save()){
          DB::table('tbl_assets')->where('product_id','=',$request->product_id)->limit(1)->update([
         'product_available'=>$product_available
          ]);
        }

        return redirect()->back()->with('success','Product Added Successfully');

        }else{
                abort(404);
            }
    }



}

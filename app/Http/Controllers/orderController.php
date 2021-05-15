<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class orderController extends Controller
{
    public function index(){
        
        $id = Auth::user()->id;
        $orders = order::where('user_id',$id)->get();
        return view('cart')->with('orders', $orders);
    }


    public function store(product $product){

    // $product = product::where('id',$req->product_id)->get();

     if(!Auth::check()){
         return redirect()->route('login');
     }
            if(!order::where('product_id','=',$product->id)->exists())
            {
                order::create([
                    'user_id' => Auth::user()->id,
                    'product_id' => $product->id,
                    'label' => 5,
                    'user_firstname' => "null",
                    'user_lastname' => "null",
                    'user_address' => "null",
                    'user_phone' => "null",
                    'price' => 50,
                    'quantity' => 2,
                    'status_id' => 0
                ]);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }else{
                return redirect()->back()->with('inCart', 'Product already in Cart');
            }
 
    }
}

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

        $total=0;
        foreach ($orders as $order) {
                 $total = $total + $order->product->price;						
        }

        
        return view('cart',[
                'orders' => $orders,
                'total' => $total,
        ]);

        
        
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
                    'user_firstname' => Auth::user()->firstname,
                    'user_lastname' => Auth::user()->lastname,
                    'user_address' => "null",
                    'user_phone' => Auth::user()->phone,
                    'price' => $product->price,
                    'quantity' => 1,
                    'status_id' => 0
                ]);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }else{
                return redirect()->back()->with('inCart', 'Product already in Cart');
            }
 
    }
}

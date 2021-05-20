<?php

namespace App\Http\Controllers;

use App\Models\confirmedOrder;
use App\Models\order;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class checkoutController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        
        $orders = order::where('user_id' , auth()->user()->id)->get();

        return view('checkout')->with('orders' , $orders);
    }

  

    public function store(Request $req){

        $orders = order::where('user_id' , auth()->user()->id)->get();

        return view('confirmCheckout')->with(['orders' => $orders,
                                                    'req' => $req]);
    }


    public function place_order(Request $req){


        $orders = order::where('user_id',auth()->user()->id)->get();

        foreach($orders as $order){
                
            confirmedOrder::create([
                    'label' => 0,
                    'user_firstname' => $req->firstname,
                    'user_lastname' => $req->lastname,
                    'user_id' => $req->user_id,
                    'user_address' => $req->address1 && $req->address2,
                    'user_phone' => $req->phone,
                    'product_id' => $order->product->id,
                    'status_id' => 0,
                ]);
    }
      return redirect()->back()->with('success' , 'Order placed successfully');
    }

 

    public function index_place_order(){
        return view('confirmCheckout');
    }
}

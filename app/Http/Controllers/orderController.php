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
                 $total = $total + ($order->product->price*$order->quantity);						
        }

        
        return view('cart',[
                'orders' => $orders,
                'total' => $total,
        ]);

        
        
    }


    public function store(Request $req){

    // $product = product::where('id',$req->product_id)->get();
    $product = product::where('id' , $req->id)->first();
    $condition = ['product_id' => $product->id,
                    'user_id'=> auth()->user()->id];
                  

             if(!order::where($condition)->exists()){
                    order::create([
                        'user_id' => Auth::user()->id,
                        'product_id' => $product->id,
                        'price' => $product->price,
                        'quantity' => $req->quantity,
                        
                    ]);
                    return redirect()->back()->with('success', 'Produit ajouté au panier avec succès!');
                
                
            }else{
                return redirect()->back()->with('inCart', 'Produit déjà dans le panier');
            }
 
    }
}

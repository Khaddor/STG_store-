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
    $id = $req->input('product_id');
    $product = product::where('id' , $id)->first();

    $condition = ['product_id' => $product->id,
                    'user_id'=> auth()->user()->id];
    $order = order::where($condition);
             if(!$order->exists()){
                    order::create([
                        'user_id' => Auth::user()->id,
                        'product_id' => $product->id,
                        'price' => $product->price,
                        'quantity' => $req->input('product_quantity'),
                        
                    ]);
                    //return redirect()->back()->with('success', 'Produit ajouté au panier avec succès!');
                    return response()->json(['status' => 'Produit Ajouté avec succés',
                                                'check' => '0']);
                
            }else{
                //return redirect()->back()->with('inCart', 'Produit déjà dans le panier');
                return response()->json(['status' => 'Produit Déjà au Panier',
                                                'check' => '1']);

            }
 
    }
}

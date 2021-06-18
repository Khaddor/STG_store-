<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request){

        if($request->input('min')  <> null){
         $products = Product::select("*")
                    ->whereBetween('price', [$request->input('min'), $request->input('max')])
                    ->paginate(10);
        }else{
             $products = Product::paginate(10);
        }
        $featured = Product::latest()->take(5)->get();
        // dd($featured);

            return view('home',[
            'products' => $products,
            'categories' => category::all(),
            'featured' => $featured
        ]);
    }

    public function products_list_index(){
            return view('products_list')->with([
                    'products' => product::all()
            ]);
    }

     public function orange(){
        
            return view('orange');
    }
    public function marjane(){
        
            return view('marjane');
    }

    public function electroplanet(){
        
            return view('electroplanet');
    }
    public function termes_conditions(){
        
            return view('termes_conditions');
    }
   
     public function  a_propos_de_nous(){
        
            return view('a_propos_de_nous');
    }
     
}


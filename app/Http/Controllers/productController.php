<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{

    public function index(product $product){

        $category_id = $product->category_id;
        $related_products = product::where('category_id' , $category_id)->get();
        
        return view('product')
                ->with(['product' => $product,
                            'related_products' => $related_products]);   
    }


    function search(Request $req){
     $data = product::where('name','like', '%'.$req->input('query').'%')->get();	
     return view('search',['products'=>$data]);
    }
}


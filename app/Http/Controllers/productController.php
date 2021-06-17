<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class productController extends Controller
{

    public function index(product $product){

        
        return view('product')
                ->with('product',$product);   
    }


    function search(Request $req){
     $data = product::where('name','like', '%'.$req->input('query').'%')->get();	
     return view('search',['products'=>$data]);
    }
  //   public function pricefilter(Request $request)
		// {
  //  		 $price = $request->price;

  //    }

      public function pricefilter(Request $request){
        
          
         //	 $query = product::where('price','>',$request->min);
      	dd($request->min);	
          $query = DB::select('select * from products where price > ' . $request->min .';');
          dd('ok');

         // $products = $query->paginate(6);
    
      return view('pricefilter');

    }
}
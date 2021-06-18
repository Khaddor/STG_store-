<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;


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
  //   public function pricefilter(Request $request)
		// {
  //  		 $price = $request->price;

  //    }

      public function pricefilter(Request $req){


        $products = Product::select("*")
                        ->whereBetween('price', [$req->input('min'), $req->input('max')])
                        ->get();

        // dd($products);

        return view('home',[
            'products' => $products,
            'categories' => category::all()
        ]);
    
    }

    public function getminPrice()
    {
      $min = Product::all('price')->min('price');
      return json_encode($min);
    }
    public function getmaxPrice()
    {
      $max = Product::all('price')->max('price');
      return $max;
    }
}
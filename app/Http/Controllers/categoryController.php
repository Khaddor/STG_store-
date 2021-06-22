<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(category $category){
       // $products = $category->products;
        $products = product::where('category_id',$category->id)->paginate(6);
        return view('category',[
            'products' => $products,
            'categories' => category::all(),
            'category_id' => $category->id
        ]);
    }

    public function category_list_index (category $category) {

         // $products = $category->products;
         $products = product::where('category_id',$category->id)->paginate(6);
         return view('category_list',[
             'products' => $products,
             'categories' => category::all(),
             'category_id' => $category->id
         ]);
    }



}

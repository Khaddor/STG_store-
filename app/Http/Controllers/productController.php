<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{

    public function index(product $product){

        
        return view('product')->with('product',$product);   
    }
}

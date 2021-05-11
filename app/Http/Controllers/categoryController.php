<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(category $category){

        return view('category',[
            'products' => $category->products,
            'categories' => category::all()

        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){

        
            return view('home',[
            'products' => product::all(),
            'categories' => category::all()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class marjaneController extends Controller
{
    public function marjane(){
        
            return view('/marjane');
    }
}

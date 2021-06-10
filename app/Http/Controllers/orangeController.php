<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class orangeController extends Controller
{
    public function orange(){
        
            return view('/orange');
    }
}

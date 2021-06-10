<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class electroplanetController extends Controller
{
    public function electroplanet(){
        
            return view('/electroplanet');
    }
}

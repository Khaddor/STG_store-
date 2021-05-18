<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class layoutController extends Controller
{

    public function delete(order $order){
        $order->delete();
        return redirect()->back();
    }

}

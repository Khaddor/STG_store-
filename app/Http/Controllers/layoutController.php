<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;

use Illuminate\Http\Request;

class layoutController extends Controller
{	
		public $search;

	public function search()
	{
    			$search = '%'.$this->search . '%';
    			return view('home',[ 'products' => product:: where('name', 'LIKE', $search)]);
    		}

    public function delete(order $order){
        $order->delete();
        return redirect()->back();
    }

}

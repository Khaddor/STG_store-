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


	
	public function update(Request $req){
		dd('ok');
		if($req->id && $req->quantity){
			$order = session()->get('order');
			$order->quantity = $req->quantity;
			session()->put('order' , $order);
			session()->flash('success' , 'Cart updated successfully');

		}
	}

}

<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\PruneBatchesCommand;

class adminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function index (){
        return view('admin');
    }


    public function add(Request $req){

        $req->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,png,ipeg|max:5048',
            'reduced_price' => 'required',
            'category' => 'required',
        ]);
            $newImageName = time() .'_'.$req->name .'.'.$req->image->extension();

            $req->image->move(\public_path('productsImages'),$newImageName);

        $product = product::create([
            'name' => $req->input('name'),
            'price' => $req->input('price'),
            'image' => $newImageName,
            'label' => 'null',
            'reduction' => $req->input('reduced_price'),
            'category_id' => $req->category,
        ]);

        return redirect()->back();

    }
}

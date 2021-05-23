<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\confirmedOrder;
use App\Models\order;
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
        return view('admin.admin_add');
    }

    public function manage(){
        $products = product::get();
        $categories = category::get();
        return view('admin.admin_manage')->with([ 'products' => $products,
                                                    'categories' => $categories]);
    }

    public function add_product(Request $req){

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

        return redirect()->back()->with('success',"Product added with success");

    }


    public function add_category(Request $req){

        $req->validate([
            'name' => ['required', 'string','unique:categories'],
            
        ]);

        category::create([
            'name' => $req->name,
        ]);
        return redirect()->back()->with('success',"Category added with success");

    }

    public function delete_product(Request $req){
        
        product::where('id',$req->id)->delete();

        return redirect()->back();
    }

    public function manage_orders(){

       $orders = confirmedOrder::get();

        return view('admin.admin_orders')->with('orders' , $orders);
    }
}








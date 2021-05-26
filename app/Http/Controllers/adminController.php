<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\confirmedOrder;
use App\Models\order;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\PruneBatchesCommand;

class adminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function dashboard_index(){
        return view ('admin.dashboard');
    }


    public function products_index(){
        $products = product::get();
        return view('admin.products')->with([ 'products' => $products]);
    }

    public function categories_index(){
        $categories = category::get();
        return view('admin.categories')->with([ 'categories' => $categories]);
    }

    public function orders_index(){
       $orders = confirmedOrder::get();
       return view('admin.orders')->with('orders' , $orders);
    }

    public function add_product_index(){
        return view ('admin.add_product');
    }
    public function add_category_index(){
        return view ('admin.add_category');
    }

    public function clients_index(){

        $users = User::get();
        $orders = confirmedOrder::get();
        return view('admin.clients')->with(['users' => $users , 'orders' => $orders]);
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

        return redirect()->route('admin_products')->with('success',"Product added with success");

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

        return redirect()->back()->with('deleted',"Product Deleted successfully");
    }

    



}








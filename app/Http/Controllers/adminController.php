<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\confirmedOrder;
use App\Models\order;
use App\Models\product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\PruneBatchesCommand;

class adminController extends Controller
{

   /* public function __construct()
    {
        $this->middleware(['auth']);
    }*/


  


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

    public function edit_product_index(product $product){
        return view('admin.edit_product')->with(['product' => $product]);
    }

    public function clients_index(){

        $users = User::get();
        $orders = confirmedOrder::get();
        return view('admin.clients')->with(['users' => $users , 'orders' => $orders]);
    }
    public function edit_category_index(category $category){
        return view('admin.edit_category')->with(['category' => $category]);
    }



    public function add_product(Request $req){

        $req->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,png,ipeg|max:5048',
            'reduced_price' => 'required',
            'quantity' => 'required',
            'category' => 'required',
        ]);
            $newImageName = time() .'_'.$req->name .'.'.$req->image->extension();

            $req->image->move(\public_path('productsImages'),$newImageName);

        $product = product::create([
            'name' => $req->input('name'),
            'price' => $req->input('price'),
            'image' => $newImageName,
            'label' => 'null',
            'inStock' => $req->quantity,
            'reduction' => $req->input('reduced_price'),
            'description' => $req->description,
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
        return redirect()->route('admin_categories')->with('success',"Category added with success");

    }

    public function delete_product(Request $req){
        
        product::where('id',$req->id)->delete();

        return redirect()->back()->with('deleted',"Product Deleted successfully");
    }

    public function change_status(Request $req){


        $id = $req->order_id;
        $order = confirmedOrder::find($id);
        $order->status_id = $req->selectedStatus;
        $order->save();

        return redirect()->back()->with('success' , 'status updated successfully');
    }

    public function edit_product(Request $req){

        $product = product::find($req->id);
        $product->name = $req->name;
        $product->price = $req->price;
        $product->reduction = $req->reduced_price;
        $product->description = $req->description;
        $product->inStock = $req->quantity;
        $product->category_id = $req->category;

        $newImageName = time() .'_'.$req->name .'.'.$req->image->extension();
         $req->image->move(\public_path('productsImages'),$newImageName);


        $product->image = $newImageName;

        $product->save();

        return redirect()->route('admin_products')->with('success', 'Product Updated Successfully   ');
    }

    public function delete_category(Request $req){
        $category = category::find($req->category_id);
        $category->delete();

        return redirect()->back()->with('success' , 'Category deleted successfully');
    }

    public function edit_category(Request $req){

        $req->validate([
            'name' => ['required', 'string','unique:categories'],
            
        ]);

        $category = category::find($req->category_id);
        $category->name = $req->name;
        $category->save();

        return redirect()->route('admin_categories')->with('success' , 'Category edited successfully');
    }



    public function dashboard_index(){

        $orders = confirmedOrder::get();
        $orders_onHold = confirmedOrder::where('status_id',1);
        $orders_accepted = confirmedOrder::where('status_id',2);
        $orders_rejected = confirmedOrder::where('status_id',3);
        $orders_done = confirmedOrder::where('status_id',4);
        
       
        $orders_today = confirmedOrder::whereDate('created_at', Carbon::today())->get();
        $users_today = User::whereDate('created_at', Carbon::today())->get()
            ->where('is_admin','!=' , 1);
        $products = product::all();

        return view('admin.dashboard')->with([ 'orders_onHold' => $orders_onHold,
                                                'orders_accepted' => $orders_accepted,
                                                'orders_rejected' => $orders_rejected,
                                                'orders_done' => $orders_done,
                                               'orders_today' => $orders_today,
                                                'orders' => $orders,
                                                'users_today' => $users_today,
                                                'products' => $products]);
    }


    public function add_stock(Request $req){

        $product = product::where('id' , $req->id)->first();
        $product->inStock += $req->added_quantity;
        $product->save();

        return redirect()->back()->with('success' , 'Stock updated Succesfully');
    }

    public function remove_stock(Request $req){

        $product = product::where('id' , $req->id)->first();
        $product->inStock -= $req->removed_quantity;
        $product->save();

        return redirect()->back()->with('success' , 'Stock updated Succesfully');


    }
}








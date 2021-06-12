<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{

    public function __construct(){
        $this->middleware(['guest'])->except('logout');;
    }

    public function index(){
        return view('login');
    }


    public function store(Request $request ){

            $this->validate($request,[
                'email' => 'required|email',
                'password' => 'required',
            ]);

  /*  if (!Auth::attempt($request->only('email','password'))){
        return back()->with('status' , 'Données incorrectes');
    }

    return redirect()->route('home');*/
    $input = $request->all();

    if(Auth::attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin_dashboard');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('status','Données incorrectes');
        }
    }
}

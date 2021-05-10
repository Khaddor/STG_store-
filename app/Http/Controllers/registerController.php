<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']); 
    }

    public function index(){
        return view('register');
    }



    public function store(Request $request){
           
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
           ]);


        User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => Hash::make($request->password),
        ]);

        Auth::attempt([
            'email'=> $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('home');


    }
}

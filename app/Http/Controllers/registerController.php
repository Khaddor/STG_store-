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
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:8','max:12'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
           ]);


        User::create([
           'firstname' => $request->firstname,
           'lastname' => $request->lastname,
           'phone'  => $request->phone,
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

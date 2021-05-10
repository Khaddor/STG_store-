<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }


    public function store(Request $request ){

            $this->validate($request,[
                'email' => 'required|email',
                'password' => 'required',
            ]);

    if (!Auth::attempt($request->only('email','password'))){
        return back()->with('status' , 'Données incorrectes');
    }

    return redirect()->route('home');
       
    }
}

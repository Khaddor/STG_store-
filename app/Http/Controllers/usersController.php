<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\PruneBatchesCommand;
use Illuminate\Support\Facades\Redirect;

class usersController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
  
    public function index(){
        return view('User.profile');
    }

    public function edit(){
        return view('User.profileEdit');
    }


    public function update(Request $request)
    {
    
    $request->validate([
        'firstname' => ['required', 'string', 'max:255'],
        'lastname' => ['required', 'string', 'max:255'],
        'email' => ['required','unique:users'],
        'password' => ['required'],
    ]);



    $user = User::findOrFail($request->id);

    $user->firstname = $request->firstname;
    $user->lastname = $request->lastname;    
    $user->email = $request->email;
    $user->password = $request->password;

    $user->save();

    return Redirect::route('profile', [$user->id])->with('message', 'User has been updated!');
}

     

}


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
  

        public function update($id, UserFormRequest $request)
{
    $user = User::findOrFail($id);

    $user->firstname = $request->get('firstname');
    $user->lastname = $request->get('lastname');
    $user->email = $request->get('email');
    $user->password = $request->get('password');

    $user->save();

    return Redirect::route('profile', [$user->id])->with('message', 'User has been updated!');
}

     

}


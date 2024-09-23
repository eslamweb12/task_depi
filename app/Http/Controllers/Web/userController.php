<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\userRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
       // Hash the password

        User::create($data); // Create the user with hashed password

        return redirect()->to('/')->with('success', 'Welcome to the site');
    }
    public function login(userRequest $request){
    $data=$request->validated();
    if(!auth()->attempt($data)){
        return redirect()->back()->with( 'error', 'phone or password is not correct');

    }

    return redirect()->to('/')->with( 'success', 'welcom to the sit');

}
public  function index(Request  $request)
{
    $users=User::query();
       if($request->filed('name')) {
           $users->where('name', 'like', '%' . request('name') .'%'); // will return the data that equal or have an litter from the name

      }
       return view('admin.allUsers', compact('users'));
}
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Session;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function profile(){
        return view('users.edit');
    }

    public function edit(Request $request){
        
        $validation = $request->validate([
            'lastname' => 'required|string|min:2',
            'avatar' => 'image',
        ]);
        
        $user = Auth::user();
        //dd($request->firstname);
        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'avatar' => $request->avatar
        ]);
        
        Session::flash('success', 'Your Profile has been Successfully updated');
        return redirect()->route('users.profile');
    }
}

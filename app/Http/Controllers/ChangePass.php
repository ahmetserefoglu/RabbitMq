<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ChangePass extends Controller
{
    //
    public function CPassword(){
        return view('admin.body.change_password');
    }

    public function UpdatePassword(Request $request)
    {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password'   =>'required|confirmed'
        ]);

        $hashedPassword = Auth::user()->getAuthPassword();
        var_dump($hashedPassword);
        exit;
        if(Hash::check($request->oldpassword,$hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return Redirect()->route('login')->with('success','Password is change Successfully');
        }else{
            return Redirect()->back()->with('error','Current Password is invalid');
        }
    }

    public function PUpdate(Request $request)
    {
        if(Auth::user()){
            $user = User::find(Auth::user()->id);
            if($user){
                return view('admin.body.update_profile',compact('user'));
            }
        }
    }

    public function UpdateProfile(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email'   =>'required|email'
        ]);

        $user = User::find(Auth::id());
        if($user){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();

            return Redirect()->back()->with('success','User Profile is update Successfully');
        }else{

            return Redirect()->back()->with('error','User Profile is not update  ');
        }
    }
}

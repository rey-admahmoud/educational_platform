<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }

    public function adduser(Request $request){
       $user=User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password)
       ]);
       Auth::login($user);
       return redirect()->route('home.index');
    }
    public function checklogin(Request $request){
        $request->validate([
            'password'=>'required',
            'email'=>'required|email'
        ]);

        $is_login=Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
        if($is_login){
            return redirect()->route('home.index');
        }else{
            return back();
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

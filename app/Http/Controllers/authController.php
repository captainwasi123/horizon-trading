<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class authController extends Controller
{
    //
    public function login(){

        return view('login');
    }

    public function loginAttempt(Request $request){
        $data = $request->all();

        if(Auth::attempt(['username' => $data['username'], 'password' => $data['password'], 'status' => '1'])){
            return redirect('/');
        }else{
            return redirect()->back()->with('error', 'Username or Password is Incorrect.');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect('/login')->with('success', 'Successfully Logged out.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(Request $request){

        $request->validate(['name'=>'required','email'=>'required|email','password'=>'required|confirmed','tc'=>'required']);

        if(Login::where('email',$request->email)->first()){

            return response(['msg'=>'email already exists','status'=>'failed']);

        }

        $login =Login::create(['name'=>$request->name,'email'=>$request->email,'password'=>$request->password,'tc'=>json_decode($request->tc)]);
        //Hash password//

        //'password'=>Hash::make($request->password);

        return response(['msg'=>'Registration Success','status'=>'Success']);

    }
}

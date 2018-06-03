<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Hash ;

/**
 *
 */
class RegisteredControllers extends Controller
{

  public function Registered(){

     return view('index_home.Registered');
  }

  public function RegisteredUser(Request $request){
     $user     = $request->user ;
     $password = $request->password ;
     $email    = $request->email;

     $ip =  $request->header('cf-connecting-ip');
     $country = $request->header('cf-ipcountry');


     $this->validate($request, [
                  'user' => 'required|max:50|unique:users,user,admin',
                  'email' => 'required|email|unique:users|max:255',
                  'password' => 'required|confirmed|min:6'
              ]);
     User::insert([
       'user' => $user ,
       'email' => $email ,
       'password' => Hash::make($password) ,
       'last_login_ip' => $ip ,
       'last_login_country' => $country ,
     ]);

     session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
     return redirect('/Login');
    // return view('index_home.Login');
     //return $user .' '. $password .' '. $email ;
  }
}

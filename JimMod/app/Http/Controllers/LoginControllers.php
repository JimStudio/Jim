<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
/**
 *
 */

class LoginControllers extends Controller{


  public function Login(){
    return view('index_home.Login');
  }

  public function LoginUser(Request $request)
  {
    $user    = $request->user ;

    $credential = ['user'=> $user, 'password' => $password];

     $this->validate($request, [
                 'user' => 'required|max:50|unique:users,user,admin',
                 'password' => 'required|confirmed|min:6'
             ]);
    if (Auth::attempt($credential)) {
      session()->flash('success', 'HelloWrod');
      return redirect('/Home');
    }else {
      session()->flash('danger', 'Sorry');
      return redirect()->back();
    }
  }
}

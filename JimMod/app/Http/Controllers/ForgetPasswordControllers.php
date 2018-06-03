<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 *
 */
class ForgetPasswordControllers extends Controller
{

  public function forgetpassword()
  {
    return view("index_home.ForgetPassword");
  }
}

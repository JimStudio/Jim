<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 *
 */
class indexControllers extends Controller
{

  public function index(){
    return view('index_home.index_select');
  }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 *
 */
class HomeControllers extends Controller
{

  public function Home()
  {
    return view("index_home.Home");
  }
}

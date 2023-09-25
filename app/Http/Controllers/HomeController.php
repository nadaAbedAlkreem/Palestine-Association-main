<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
 
   public function index() 
   {
      
      // dd( Auth::guard('admin')->user()) ; 
    return view('Dashboard.home') ; 
   }
}

<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeControllers extends Controller
{
    public function index() 
    {
        return view('webApplication.home') ;
    }
}

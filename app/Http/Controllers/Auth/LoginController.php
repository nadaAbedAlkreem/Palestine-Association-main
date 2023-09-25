<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Requests\LoginRequest ; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
class LoginController extends Controller
{
   
  public function showLogin()
  {

    return response()->view('Dashboard.Auth.login') ; 
  }

  public function Login(LoginRequest $request)
  {
  
      $loggedIn = Auth::guard('admin')->attempt($request->loginInfo()) ; 
    
    if($loggedIn)
    {
   
       return redirect()->route('home');

      }
    else 
    {       
      return response()->json(['message' =>  "password and email not correct "   , 'status' => false ]);
    }
  }
 
}

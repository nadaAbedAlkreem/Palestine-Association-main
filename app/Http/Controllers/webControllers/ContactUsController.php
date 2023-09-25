<?php

namespace App\Http\Controllers\webControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Http\Requests\StoreContactUsRequest;
 

class ContactUsController extends Controller
{
    
    public function index()
    {
        return view('webApplication.forms.contactUs') ; 
    }
    public function store(Request  $request)
    {
        $validated_1 = $request->validate([
            'full_name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        
        ]);
     $create_contactUs= ContactUs::create($validated_1); 
     return $create_contactUs? parent::successResponse():  parent::errorResponse(); 
    }
}

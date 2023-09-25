<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use App\Models\Images;  //Images

class UpdateNewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        
        return [
            'title' => 'required|max:50',
            'title_ar' => 'required|max:50', 
            'location' =>'required' ,
            'description' =>'required' , 
            'description_ar' =>'required' , 
            'location_ar' =>'required' , 
            'dateAndTime' =>'required' 
          ];
    }

    public function getData(){
        $data=$this->validated();
 

        return $data ; 


        
    }

}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class StoreAchievementsRequest extends FormRequest
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
        $selectedLanguage = $this->input('language', 'en');
        $role_en =   
        [
            'title'=>'required', 
            'image'=>'required',  
            'count'=>'required|integer',  
        ];
        $role_ar =   
        [
            'title_ar'=>'required', 
            'image'=>'required',  
            'count'=>'required|integer',  
        ];
        if($selectedLanguage == "ar"){
                
            return $role_ar  ; 
        }else
        {
            return $role_en ; 
        
        }
    }

    public  function getData()
    {
        $data=$this->validated();
        $data['language'] = $this->input('language', 'en');
         if ($this->hasFile('image')) 
        {
            $path = 'uploads/images/achievements/';
            $nameImage = time()+rand(1,10000000).'.'. $this->file('image')->getClientOriginalExtension();
            Storage::disk('public')->put($path.$nameImage, file_get_contents( $this->file('image') ));
            $data['image'] = $path.$nameImage ;
        }
        return $data;
    }
    
}

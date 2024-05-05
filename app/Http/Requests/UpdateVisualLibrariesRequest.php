<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class UpdateVisualLibrariesRequest extends FormRequest
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
        $role_ar =  [
            'title_ar' => 'required' , 
            'description_ar' =>'required' , 
            'image' => '',
            'images' => ''
       ];
        $role_en = [
            'title' => 'required' , 
            'description' => 'required' , 
            'image' => '',
            'images' => ''
       ];

        if($selectedLanguage == "ar"){
        
            return $role_ar  ; 
        }else
        {
            return $role_en ; 
        
        }
    }
     public function getData()
      {
        $data=$this->validated();
        if ($this->hasFile('image')) 
        {
            $path = 'uploads/images/visaulLibraries/';
            $nameImage = time()+rand(1,10000000).'.'. $this->file('image')->getClientOriginalExtension();
            Storage::disk('public')->put($path.$nameImage, file_get_contents( $this->file('image') ));
            $data['image'] = $path.$nameImage;
         }

        return $data;
    }

}

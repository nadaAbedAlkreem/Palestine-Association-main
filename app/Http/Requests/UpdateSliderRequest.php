<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderRequest extends FormRequest
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
        $rules = [
            'id' => 'required' , 
            'title'=>'required', 
            'title_ar'=>'required',  
            'description'=>'required', 
            'description_ar' =>'required', 
            'rediract_to'=>'' , 
            'text_button' =>   ' ' ,
    
            'image' =>''  , 
            'active'=>'' , 
            'publication_start'=>'required' , 
            'publication_end'=>   function ($attribute, $value, $fail) {
                $start = $this->input('publication_start');
                if ($value <= $start) {
                    $fail('The ' . $attribute . ' must be strictly after the publication start date.');
                }
            }, // Ensure end date is after start date (without being equal)            , 
        ];
        if ($this->input('rediract_to') !== null) {
            $rules['text_button'] = 'required';
        }
        return $rules;

    }
    public function getData()
    {

           $data=$this->validated();
           if($this->has('active')){
            $data['active'] = 1  ; 

            }
           if ($this->hasFile('image')) 
          {
              $path = 'uploads/images/slider/';
              $nameImage = time()+rand(1,10000000).'.'. $this->file('image')->getClientOriginalExtension();
              Storage::disk('public')->put($path.$nameImage, file_get_contents( $this->file('image') ));
              $data['image'] = $path.$nameImage ;
            }
  
      
  
        return $data ; 
    }
}

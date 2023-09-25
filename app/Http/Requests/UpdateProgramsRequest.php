<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Images; 
class UpdateProgramsRequest extends FormRequest
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
            'image'=>' ', 
            'title'=>'required',  
            'title_ar'=>'required' ,  
            'brief'   =>'required' ,
            'brief_ar' =>'required'  ,  
            'strategic_objective'    =>'required'  ,  
            'strategic_objective_ar' =>'required'  ,  
            'special_objectives'    =>'required',  
            'special_objectives_ar' =>'required',  
            'ativities_events'    =>'required',  
            'ativities_events_ar'=>'required' , 
        ];
    }

    public function getData()
    {
        $data=$this->validated();

        if ($this->hasFile('image')) 
        {
            $path = 'uploads/images/program/';
            $nameImage = time()+rand(1,10000000).'.'. $this->file('image')->getClientOriginalExtension();
            Storage::disk('public')->put($path.$nameImage, file_get_contents( $this->file('image') ));
            $data['image'] = $path.$nameImage ;
        }
       
        return $data ; 

    }
}

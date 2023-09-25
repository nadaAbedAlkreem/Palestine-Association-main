<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class UpdatePartnersRequest extends FormRequest
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
            'name' =>'required' , 
            'name_ar' =>'required' , 
            'images'=>'' , 
        ];
    }

    public  function getData()
    {
        $data=$this->validated();
        if ($this->hasFile('images')) 
        {
            $path = 'uploads/images/partners/';
            $nameImage = time()+rand(1,10000000).'.'. $this->file('images')->getClientOriginalExtension();
            Storage::disk('public')->put($path.$nameImage, file_get_contents( $this->file('images') ));
            $data['images'] = $path.$nameImage ;
        }
        return $data;
    }
}

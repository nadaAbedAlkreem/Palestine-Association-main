<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePublicationsAndReportsRequest extends FormRequest
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
            'title' => 'required' , 
            'title_ar'=>'required',
            'images'=>'',
            'file'=>'',
        ];
    }
    public function getData()
    {
        $data=$this->validated();

        if ($this->hasFile('image')) 
        {
            $path = 'uploads/images/slider/';
            $nameImage = time()+rand(1,10000000).'.'. $this->file('image')->getClientOriginalExtension();
            Storage::disk('public')->put($path.$nameImage, file_get_contents( $this->file('image') ));
            $data['image'] = $path.$nameImage ;
        }
        if ($this->hasFile('file')) 
        {
            $path = 'uploads/files/reports/';
            $nameImage = time()+rand(1,10000000).'.'. $this->file('file')->getClientOriginalExtension();
            Storage::disk('public')->put($path.$nameImage, file_get_contents( $this->file('image') ));
            $data['file'] = $path.$nameImage ;
        }
        return $data ; 

    }
}


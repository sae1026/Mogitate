<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>['required'],
            'price'=>['required', 'integer', 'min:0'],
            //'image'=>['file', 'mimes:jpeg, jpg, png' ],
            'season=id'=>['required'],
            'description'=>['required']
        ];
    }
}



//'demensions:min_width=100,min_height=100,max_width=2000,max_height=2000'
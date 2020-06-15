<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => 'required|unique:rooms|',
            'typeroom' => 'required',
            'number' => 'required',
            'area' => 'required',
            'price' => 'required',
            'image' => 'image:jpeg,jpg,png,gif|required|max:10000',
        ];
    }
}
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Product_validation extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'quantity' => 'required|integer',
            'price' => 'integer',
            'category_id' => 'required|integer',
            'manufacturer_id' => 'required',
            'img_url' => 'required|active_url'
        ];
    }

    public function messages()
    {  
        return [
            'title.required' => 'Title required',
            'description.required' => 'Description required',
            'quantity.required' => 'Must enter this field',
            'price.required' => 'Price required',
            'category_id.required' => 'Category ID required',
            'manufacturer_id.required' => 'Manufacturer required',
            'img_url.required' => 'Image required',
        ];
    }
}

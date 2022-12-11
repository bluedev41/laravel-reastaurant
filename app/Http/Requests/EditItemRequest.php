<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditItemRequest extends FormRequest
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
             'name' => 'required',
             'description' => 'required',
             'price' => 'required|numeric',
             'quantity' => 'required|numeric',
             'category' => 'required',
             'itemImage' => 'image|max:1999'
         ];
     }

     public function messages()
     {
         return [
             'name.required' => 'Email is required',
             'price.required' => 'Price is required',
             'price.numeric' => 'Price needs to be numeric',
             'quantity.required' => 'Quantity is required',
             'quantity.numeric' => 'Quantity must be numeric',
             'category.required' => 'Category is required',
             'itemImage.image' => 'Item image must be an image file'
         ];
     }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
             'name' => 'required|unique:items',
             'description' => 'required',
             'price' => 'required|numeric',
             'quantity' => 'required|numeric',
             'category' => 'required',
             'itemImage' => 'required|image|max:1999'
         ];
     }

     public function messages()
     {
         return [
             'name.required' => 'Name is required',
             'name.unique' => 'Name already exists',
             'price.required' => 'Price is required',
             'price.numeric' => 'Price needs to be numeric',
             'quantity.required' => 'Quantity is required',
             'quantity.numeric' => 'Quantity must be numeric',
             'category.required' => 'Category is required',
             'itemImage.image' => 'Item image must be an image file',
             'itemImage.required' => 'Item image is required'
         ];
     }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
             'email' => 'required|email|unique:employees',
             'phone' => 'required|unique:employees',
             'password' => 'required|min:4',
             'address' => 'required',
             'gender' => 'required',
             'employeeImage' => 'image|max:1999'
         ];
     }

     public function messages()
     {
         return [
             'name.required' => 'Name is required',
             'email.unique' => 'Email already exists',
             'email.required' => 'Email is required',
             'email.email' => 'Email must be a valid email',
             'phone.unique' => 'Phone number already exists',
             'phone.required' => 'Phone number is required',
             'password.required' => 'Password is required',
             'password.min' => 'Password must be minimum 4 characters long',
             'address.required' => 'Address is required',
             'gender.required' => 'Gender is required',
             'employeeImage.image' => 'Employee image must be an image file',
             'employeeImage.max' => 'Employee image must be less than 2MB'
         ];
     }
}

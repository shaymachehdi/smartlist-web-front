<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SginupRequest extends FormRequest
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
           'email'=>'required|min:4|max:',
           'password'=>'required|min:4|max:8',
           'firstname'=>'required|min:4|max:8',
           'dateofbirth'=>'required|min:4|max:8',
           'phone_number'=>'required|min:4|max:8',
           'adresse'=>'required|min:4|max:8',
           'confirm'=>'required|same:password',
           'lastname'=>'required|min:4|max:8',
        ];
    }
}

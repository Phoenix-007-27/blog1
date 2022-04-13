<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
          'name' => 'required|string',
          'email' => 'required|string|email|unique:Users',
          'password' => 'required|string',

        ];
    }

    public function messages(){

        return [
            'email.unique' => 'Такой email уже существует',
        ];
    }
}

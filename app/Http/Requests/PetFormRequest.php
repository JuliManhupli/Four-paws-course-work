<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' =>  'required',
            'email' =>  array('required', 'regex:/[0-9a-z]+@[a-z]/'),
            'phone' =>  array('required', 'regex:/^(0|\+380)\d{9}$/')
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>  "Поле ім'я є обов'язковим" ,
            "email.required" =>  "Поле email є обовязковим" ,
            'phone.required' =>  "Поле номеру телефону є обовязковим",
            'email.regex' =>  "Неправильный формат поля email",
            'phone.regex' =>  "Неправильный формат поля номер телефону"
        ];
    }
}

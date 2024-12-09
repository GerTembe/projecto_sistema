<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validacao extends FormRequest
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
            'name'=> 'required|string',
            'email'=>['required','unique:students'],
            'password'=>'required',
            'contact'=>'required|regex:/^\+?(258)?\s?(8\d{1}\d{7})$/|unique:students',
            'city'=>'required|string',
            'country'=>'required|string',
            'date_of_birth'=>'required|date',
            'registration_date'=>'required|date'
            
        ];
    }
}

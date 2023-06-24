<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\validacionRut;

class StoreCustomerRequest extends FormRequest
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
       dd(7);
        return [
            'rut' => new validacionRut,
            'email' => 'nullable|email:dns'
        ];
    }
    

    public function messages()
    {
        return [              
            
            'email.email'=>['dns'=>'El Correo aun no es valido']
            ];

    }
}

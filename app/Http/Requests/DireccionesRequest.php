<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DireccionesRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'domicilio' => 'required|string|max:80',
            'doctor_id' => 'required'
        ];
    }

    public function messages(): array {
        return[
            'max' => "El :attribute no puede tener mas de :max caracteres",
            'string' => "El :attribute solo puede ser con letras",
            'required' => "El :attribute no puede estar vacio"
        ];
    }

    public function attributes(): array{
        return[
            'doctor_id' => 'doctor',
            'domicilio' => 'domicilio'
        ];
    }
}

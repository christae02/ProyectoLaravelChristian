<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorCarritoRequest extends FormRequest
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
            'doctor_id' => [
                'required',
                'integer',
                'exists:direcciones,doctor_id'
            ]
        ];
    }

    public function messages(): array {
        return[
            'required' => "El :attribute no puede estar vacio",
            'integer' => "El :attribute solo acepta valores numéricos",
            'exists' => "El :attribute no tiene domicilio asignado"
        ];
    }

    public function attributes(): array{
        return[
            'doctor_id' => 'doctor'
        ];
    }
}

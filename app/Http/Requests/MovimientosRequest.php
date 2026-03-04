<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovimientosRequest extends FormRequest
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
            'domicilio' => 'required|string',
            'doctor_id' => 'required',
            'receta' => 'required|string|max:60'
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute es requerido',
            'string' => ':attribute tiene que ser solo texto',
            'max' => ':attribute no puede ser mayor a :max'
        ];
    }

    public function attributes(): array
    {
        return [
            'domicilio' => 'Domicilio',
            'doctor_id' => 'Doctor',
            'receta' => 'Receta'
        ];
    }
}

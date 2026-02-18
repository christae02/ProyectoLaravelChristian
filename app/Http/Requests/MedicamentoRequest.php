<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicamentoRequest extends FormRequest
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
            'nombre' => 'required|string|max:80',
            'mg' => [
                'required',
                'string',
                'max:8',
                'regex:/^[0-9\/]+$/'
            ],
            'presentacion' => 'required|string|max:20',
            'imagen' => 'required'
        ];
    }

    public function messages(): array {
        return[
            'max' => ":attribute no puede tener mas de :max caracteres",
            'string' => ":attribute solo puede ser con letras",
            'required' => ":attribute no puede estar vacio",
            'integer' => ":attribute solo acepta valores numéricos",
            'regex' => ':attribute solo acepta números y "/"'
        ];
    }

    public function attributes(): array{
        return[
            'nombre' => 'Nombre',
            'mg' => 'Miligramos',
            'presentacion' => 'Presentación',
            'imagen' => 'Imagen'
        ];
    }

}

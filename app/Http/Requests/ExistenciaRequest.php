<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExistenciaRequest extends FormRequest
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
            'lote' => 'required|string|max:80',
            'fecha_cad' => 'required',
            'existencias' => 'required|integer|max:999',
            'medicamento_id' => 'required'
        ];
    }

    public function messages(): array {
        return[
            'max' => ":attribute no puede tener mas de :max caracteres",
            'string' => ":attribute solo puede ser con letras",
            'required' => ":attribute no puede estar vacio",
            'integer' => ":attribute solo acepta valores numéricos"
        ];
    }

    public function attributes(): array{
        return[
            'lote' => 'Lote',
            'fecha_cad' => 'Fecha de Caducidad',
            'existencias' => 'Cantidad',
            'medicamento_id' => 'Medicamento'
        ];
    }
}

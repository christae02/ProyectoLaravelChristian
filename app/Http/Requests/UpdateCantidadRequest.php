<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCantidadRequest extends FormRequest
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
            'existencias' => 'required|integer|max:1000|min:1'
        ];
    }

    public function messages(): array
    {
        return[
            'max' => "La :attribute no puede tener mas de :max caracteres",
            'min' => "La :attribute no puede ser 0",
            'string' => "La :attribute solo puede ser con letras",
            'required' => "La :attribute no puede estar vacia"
        ];
    }

    public function attributes(): array
    {
        return[
            'existencias' => 'cantidad'
        ];
    }
}

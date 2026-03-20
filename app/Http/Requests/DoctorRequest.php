<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'nombre' => [
                'required',
                'string',
                'max:80',
                'regex:/^[\pL\s]+$/u'
            ],
            'apellidoPaterno' => [
                'required',
                'string',
                'max:40',
                'regex:/^[\pL\s]+$/u'
            ],
            'apellidoMaterno' => [
                'required',
                'string',
                'max:40',
                'regex:/^[\pL\s]+$/u'
            ],
            'cedProf' => [
                'required',
                'integer',
                'digits_between:6,12',
                'unique:doctor,cedProf'
            ]
        ];
    }

    public function messages(): array {
        return[
            'max' => ":attribute no puede tener mas de :max caracteres",
            'string' => ":attribute solo puede ser con letras",
            'required' => ":attribute no puede estar vacio",
            'regex' => ":attribute solo acepta letras",
            'integer' => ":attribute solo acepta valores numéricos",
            'digits_between' => ":attribute solo puede tener entre :min y :max digitos",
            'unique' => ":attribute ya existe"
        ];
    }

    public function attributes(): array{
        return[
            'nombre' => 'Nombre',
            'apellidoPaterno' => 'Apellido Paterno',
            'apellidoMaterno' => 'Apellido Materno',
            'cedProf' => 'Cedula Profesional'
        ];
    }
}

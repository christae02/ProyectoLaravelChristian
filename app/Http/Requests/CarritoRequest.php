<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Carrito;
use App\Models\Existencia;

class CarritoRequest extends FormRequest
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
        $existencia_id = $this->existencia_id;

        $carrito = Carrito::where('existencia_id',$existencia_id);

        $existencia = Existencia::find($existencia_id);

        $existencias = $existencia->existencias;

        if($carrito->exists()){
            $cantidad_nueva = $carrito->first()->cantidad;
            $cantidad = $existencias - $cantidad_nueva;
        }
        else{
            $cantidad = $existencias;
        }


        return [
            'cantidad' => 
                [
                    'required',
                    'integer',
                    'min:1',
                    "max:$cantidad"
                ],
            'existencia_id' => 'required'
        ];
    }

    public function messages(): array {
        return[
            'max' => ":attribute no puede ser mas de :max",
            'min' => ":attribute no puede ser menos de :max",
            'integer' => ":attribute solo puede ser con números",
            'required' => ":attribute no puede estar vacio"
        ];
    }

    public function attributes(): array{
        return[
            'cantidad' => 'Cantidad',
            'existencia_id' => 'Existencia'
        ];
    }
}

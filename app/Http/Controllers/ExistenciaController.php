<?php

namespace App\Http\Controllers;

use App\Models\Existencia;
use App\Models\Medicamento;
use App\Models\Movimientos;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Http\Requests\ExistenciaRequest;
use App\Http\Requests\UpdateExistenciaRequest;
use App\Http\Requests\UpdateCantidadRequest;

class ExistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $existencias = Existencia::latest('created_at')
            ->with('medicamento')
            ->paginate('8');

        return view('catalogo',[
            'existencias' => $existencias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $medicamento = Medicamento::find($id);

        return view('existencia.create',[
            'medicamento' => $medicamento
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExistenciaRequest $request)
    {
        $id = $request->medicamento_id;

        $existencia = Existencia::create($request->validated());

        $mov = Movimientos::create([
            'tipo' => 'entrada',
            'cantidad' => $existencia->existencias,
            'fecha' => date("Y-m-d H:i:s"),
            'existencia_anterior' => 0,
            'nueva_existencia' => $existencia->existencias,
            'existencia_id' => $existencia->id
        ]);

        return redirect()->route('antibioticos.show',$id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $existencias = Existencia::latest('created_at')
            ->where('medicamento_id',$id)
            ->paginate('5');

        $medicamentos = Medicamento::find($id);

        return view('existencia.show',[
            'existencias' => $existencias,
            'medicamentos' => $medicamentos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $existencia = Existencia::find($id);

        return view('existencia.edit',[
            'existencia' => $existencia
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExistenciaRequest $request, string $id)
    {

        $existencia = Existencia::findOrFail($id);

        $existencia->update($request->validated());

        $medicamento_id = $existencia->medicamento_id;

        return redirect()->route('antibioticos.show',$medicamento_id);
    }

    /**
     * Show the form for editing the field 'Cantidad' from a specified resource.
     */
    public function editCantidad(string $id)
    {
        $existencia = Existencia::find($id);

        return view('existencia.editCantidad',[
            'existencia' => $existencia
        ]);
    }
    
    /**
     * Update the field 'Cantidad' from 'Existencia'
     */

    public function updateCantidad(UpdateCantidadRequest $request, string $id)
    {
        $existencia = Existencia::findOrFail($id);

        $cantidad = $request->existencias;
        $cantidad_actual = $existencia->existencias;
        $nuevaExistencia = $cantidad + $cantidad_actual;

        $existencia->update([
            'existencias' => $nuevaExistencia
        ]);

        $mov = Movimientos::create([
            'tipo' => 'entrada',
            'cantidad' => $cantidad,
            'fecha' => date("Y-m-d H:i:s"),
            'existencia_anterior' => $cantidad_actual,
            'nueva_existencia' => $existencia->existencias,
            'existencia_id' => $existencia->id
        ]);

        $medicamento_id = $existencia->medicamento_id;

        return redirect()->route('antibioticos.show',$medicamento_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

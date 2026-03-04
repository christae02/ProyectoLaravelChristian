<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Movimientos;
use App\Models\Carrito;
use App\Models\Existencia;
use App\Http\Requests\MovimientosRequest;
use App\Exports\MovimientosExport;
use Maatwebsite\Excel\Facades\Excel;

class MovimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movimientos = Movimientos::latest('created_at')
            ->with(['doctor.direcciones','existencia.medicamento'])
            ->paginate('5');

        return view('inicio', [
            'movimientos' => $movimientos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovimientosRequest $request)
    {
        $request->validated();

        $carrito = Carrito::all();

        foreach($carrito as $carro){
            $id = $carro->existencia_id;
            $cantidad = $carro->cantidad;

            $existencia = Existencia::findOrFail($id);
            $cantidad_anterior = $existencia->existencias;
            $cantidad_nueva = $cantidad_anterior - $cantidad;

            $mov = Movimientos::create([
                'tipo' => 'salida',
                'cantidad' => $cantidad,
                'fecha' => date("Y-m-d H:i:s"),
                'receta' => $request->receta, 
                'existencia_anterior' => $cantidad_anterior,
                'nueva_existencia' => $cantidad_nueva,
                'existencia_id' => $id,
                'doctor_id' => $request->doctor_id,
                'domicilio' => $request->domicilio
            ]);

            $existencia->update([
                'existencias' => $cantidad_nueva
            ]);
        }

        Carrito::truncate();

        return redirect()->route('movimientos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function export()
    {
        return Excel::download(new MovimientosExport, 'Movimientos.xlsx');
    }

    public function search(Request $request)
    {

        $buscar = $request->buscar;

dd();

        $movimientos = Movimientos::latest('created_at')
            ->with(['doctor','existencia.medicamento'])
            ->whereHas('existencia.medicamento',function($q){
                $q->where('nombre','like','%'.$buscar.'%');
            })
            ->paginate('5');

        return view('inicio', [
            'movimientos' => $movimientos
        ]);
    }
    
}

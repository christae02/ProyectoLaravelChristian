<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Movimientos;

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
    public function store(Request $request)
    {
        //
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

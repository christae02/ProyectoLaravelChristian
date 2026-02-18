<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Medicamento;
use App\Models\Existencia;
use App\Http\Requests\MedicamentoRequest;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicamentos = Medicamento::latest('created_at')
            ->paginate(5);

        return view('antibioticos',[
            'medicamentos' => $medicamentos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('antibioticos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MedicamentoRequest $request)
    {
        Medicamento::create($request->validated());

        $medicamento = Medicamento::latest('created_at')
            ->first();

        return view('antibioticos.choice',[
            'medicamento' => $medicamento
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $total = Existencia::where('medicamento_id',$id)
            ->sum('existencias');

        $existencias = Existencia::latest('created_at')
            ->where('medicamento_id',$id)
            ->paginate('4');

        $medicamentos = Medicamento::find($id);

        return view('antibioticos.show',[
            'existencias' => $existencias,
            'medicamentos' => $medicamentos,
            'total' => $total
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medicamento = Medicamento::find($id);

        return view('antibioticos.edit',[
            'medicamento' => $medicamento
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MedicamentoRequest $request, String $id)
    {
        $medicamento = Medicamento::findOrFail($id);

        $medicamento->update($request->validated());

        return redirect()->route('antibioticos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

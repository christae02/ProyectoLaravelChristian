<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Direcciones;
use App\Http\Requests\DireccionesRequest;

class DireccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $doctor = Doctor::find($id);

        return view('direcciones.create',[
            'doctor' => $doctor
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DireccionesRequest $request)
    {
        $id = $request->doctor_id;

        Direcciones::create($request->validated());
        return redirect()->route('doctor.show',$id);
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Doctor;
use App\Models\Direcciones;
use App\Http\Requests\DoctorRequest;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctor = Doctor::latest('created_at')
            ->with('direcciones')
            ->paginate(8);

        return view('doctor', [
            'doctor' => $doctor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $request)
    {
        Doctor::create($request->validated());

        $doctor = Doctor::latest('created_at')
            ->first();

        return view('doctor.choice',[
            'doctor' => $doctor
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $direcciones = Direcciones::latest('created_at')
            ->where('doctor_id',$id)
            ->paginate('4');

        $doctor = Doctor::find($id);

        return view('doctor.show',[
            'doctor' => $doctor,
            'direcciones' => $direcciones
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctor::findOrFail($id);

        return view('doctor.edit',[
            'doctor' => $doctor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorRequest $request, string $id)
    {
        $doctor = Doctor::findOrFail($id);

        $doctor->update($request->validated());

        return redirect()->route('doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\Doctor;
use App\Models\Direcciones;
use App\Http\Requests\CarritoRequest;
use App\Http\Requests\CarritoUpdateRequest;
use App\Http\Requests\DoctorCarritoRequest;
use App\Http\Requests\DoctorRequest;
use App\Http\Requests\DireccionesRequest;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carrito = Carrito::latest('created_at')
            ->with('existencia.medicamento')
            ->paginate('5');

        return view('carrito',[
            'carrito' => $carrito
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctores = Doctor::latest('created_at')->get();

        return view('carrito.doctor',[
            'doctores' => $doctores
        ]);
    }

    /**
     * Validate if there is a doctor foreign key at Direcciones table.
     */

    public function validateDoctor(DoctorCarritoRequest $request)
    {
        $request->validated();

        $doctor_id = $request->doctor_id;

        $domicilios = Direcciones::where('doctor_id',$doctor_id)->get();

        $doctor = Doctor::findOrFail($doctor_id);

        return view('carrito.create',[
            'domicilios' => $domicilios,
            'doctor' => $doctor
        ]);
    }

     /**
     * Store a newly created resource in storage.
     */

    public function store(CarritoRequest $request)
    {
        $existencia_id = $request->existencia_id;

        $carrito = Carrito::where('existencia_id',$existencia_id);

        if($carrito->exists()){
            $cantidad_anterior = $carrito->first()->cantidad;
            $cantidad = $request->cantidad;
            $cantidad_nueva = $cantidad_anterior + $cantidad;
            $carrito->update([
                'cantidad' => $cantidad_nueva
            ]);
        }
        else{
            Carrito::create($request->validated());
        }

        

        return redirect()->route('carrito.index');
    }

    /**
     * Show the Create Doctor form to store another one
     */

    public function createDoctor()
    {
        return view('carrito.createDoctor');
    }

    /**
     * Store the doctor for the carrito end
     */

    public function storeDoctor(DoctorRequest $request)
    {
        Doctor::create($request->validated());

        $doctor = Doctor::latest('created_at')
            ->first();

        $id = $doctor->id;

        return redirect()->route('carrito.createDomicilio',$id);
    }

    /**
     * Show the Create Domicilio form to store another one to an especific doctor
     */

    public function createDomicilio(string $doctor_id)
    {
        return view('carrito.createDomicilio',[
            'doctor_id' => $doctor_id
        ]);
    }

    /**
     * Store the domicilio for the carrito end
     */

    public function storeDomicilio(DireccionesRequest $request)
    {
        $doctor_id = $request->doctor_id;

        Direcciones::create($request->validated());

        $domicilios = Direcciones::where('doctor_id',$doctor_id)->get();

        $doctor = Doctor::findOrFail($doctor_id);

        return view('carrito.create',[
            'domicilios' => $domicilios,
            'doctor' => $doctor
        ]);
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
        $carrito = Carrito::with('existencia')
            ->find($id);

        return view('carrito.edit',[
            'carrito' => $carrito
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarritoUpdateRequest $request, string $id)
    {
        $request->validated();

        $cantidad = $request->cantidad;

        $carrito = Carrito::find($id);
        $carrito->update([
            'cantidad' => $cantidad
        ]);

        return redirect()->route('carrito.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carrito = Carrito::findOrFail($id);
        $carrito->delete();

        return redirect()->route('carrito.index');
    }
}

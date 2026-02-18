@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-10 justify-items-center">
    <div class="w-full flex ml-[5%]">
        <x-anchor bg="bg-red-500" title="Regresar" href="/doctor/{{ $doctor->id }}" hover="bg-red-300" size="3xl"/>
    </div>
    <div class="w-[50%] p-10 bg-gray-200 shadow-lg rounded-4xl justify-items-center text-center">
        <h1 class="text-4xl text-blue-500 font-bold">AGREGAR DIRECCIÓN</h1>
        <form 
            class="bg-gray" 
            action="{{ route('doctor.direcciones.store') }}" 
            method="POST"
        >
            @method('POST')
            @csrf

            <x-forminput title="Domicilio" id="domicilio" value="{{ old('domicilio') }}" width="100" mb="0"/>
            <x-errormessage attribute="domicilio"/>

            <input type="hidden" value="{{ $doctor->id }}" name="doctor_id" id="doctor_id">
            <x-errormessage attribute="doctor_id"/>

            <button 
                class=" rounded-2xl bg-green-500 font-bold text-lg text-white p-3 mt-5 hover:bg-green-300"
                type="submit"
            >
                Agregar
            </button>

        </form>
    </div>

  </div>
@endsection
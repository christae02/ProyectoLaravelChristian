@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-10 justify-items-center text-center">
    <div class="w-full flex ml-[5%]">
        <x-anchor bg="bg-red-500" title="Regresar" href="/doctor" hover="bg-red-300" size="3xl"/>
    </div>
    <div class="w-170 p-10 bg-gray-200 shadow-lg rounded-4xl">
        <h1 class="text-4xl text-blue-500 font-bold mb-5">AGREGAR DOCTOR</h1>
        <form 
            class="bg-gray" 
            method="POST" 
            action="{{ route('doctor.store') }}"
        >
            @method('POST')
            @csrf


            <x-forminput title="Nombre" id="nombre" value="{{ old('nombre') }}" mb="0" width="120"/>
            <x-errormessage attribute="nombre"/>

            <x-forminput title="Apellido Paterno" id="apellidoPaterno" value="{{ old('apellidoPaterno') }}" mb="0"/>
            <x-errormessage attribute="apellidoPaterno"/>

            <x-forminput title="Apellido Materno" id="apellidoMaterno" value="{{ old('apellidoMaterno') }}" mb="0"/>
            <x-errormessage attribute="apellidoMaterno"/>

            <x-forminput title="Cedula Profesional" id="cedProf" value="{{ old('cedProf') }}" mb="0"/>
            <x-errormessage attribute="cedProf"/>

            <button type="submit" class="mt-5 bg-green-500 rounded-4xl font-bold text-lg text-white p-2 hover:bg-green-300">Agregar</button>

        </form>
    </div>
  </div>
@endsection()

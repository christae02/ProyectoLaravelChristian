@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-10 justify-items-center text-center w-full">
    <div class="w-full flex ml-[5%]">
        <x-anchor bg="bg-red-500" title="Regresar" href="/antibioticos" hover="bg-red-300" size="3xl"/>
    </div>
    <div class="w-[40%] p-10 bg-gray-200 rounded-4xl shadow-lg">
        <h1 class="text-4xl font-bold text-blue-500 mb-5">AGREGAR ANTIBIOTICO</h1>
        <form 
            class="bg-gray" 
            method="POST" 
            action="{{ route('antibioticos.store') }}"
        >
            @method('POST')
            @csrf

            <x-forminput title="Nombre" id="nombre" value="{{ old('nombre') }}" mb="0" width="120"/>
            <x-errormessage attribute="nombre"/>

            <x-forminput title="Miligramos" id="mg" value="{{ old('mg') }}" mb="0"/>
            <x-errormessage attribute="mg"/>

            <x-forminput title="Presentación" id="presentacion" value="{{ old('presentacion') }}" mb="0"/>
            <x-errormessage attribute="presentacion"/>

            <x-forminput title="Imagen" id="imagen" type="file" mb="0"/>
            <x-errormessage attribute="imagen"/>

            <button type="submit" class="mt-5 bg-green-500 rounded-4xl font-bold text-lg text-white p-2 hover:bg-green-300">Agregar</button>

        </form>
    </div>
  </div>
@endsection()

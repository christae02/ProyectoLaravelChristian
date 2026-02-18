@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-10 justify-items-center text-center">
    <div class="w-full flex ml-[5%]">
        <x-anchor bg="bg-red-500" title="Regresar" href="/antibioticos/{{ $existencia->medicamento_id }}" hover="bg-red-300" size="3xl"/>
    </div>
    <div class="w-[35%] p-10 bg-gray-200 rounded-4xl shadow-lg">
        <h1 class="text-4xl text-blue-500 font-bold mb-5">EDITAR EXISTENCIA</h1>
        <form 
            class="bg-gray" 
            method="POST" 
            action="{{ route('antibioticos.existencia.update',$existencia->id) }}"
        >
            @method('POST')
            @csrf

            <x-forminput title="Lote" id="lote" value="{{ old('lote',$existencia->lote) }}" mb="0" width="120"/>
            <x-errormessage attribute="lote"/>

            <x-forminput title="Fecha de Caducidad" id="fecha_cad" type="month" value="{{ old('fecha_cad',$existencia->fecha_cad?->format('Y-m')) }}" mb="0"/>
            <x-errormessage attribute="fecha_cad"/>

            <button type="submit" class="mt-5 bg-green-500 rounded-4xl font-bold text-lg text-white p-2 hover:bg-green-300">Editar</button>

        </form>
    </div>
  </div>
@endsection()
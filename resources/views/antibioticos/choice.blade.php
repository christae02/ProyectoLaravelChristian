@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-10 justify-items-center text-center">
    <div class="w-170 p-10 bg-green-500 border rounded-4xl">
        <h1 class="text-4xl text-white mb-5">¿AGREGAR EXISTENCIA?</h1>
        <div class="flex justify-between">
            <x-anchor bg="bg-red-500" title="Regresar" href="{{ route('antibioticos.index') }}" size="2xl" hover="bg-red-300" />
            <x-anchor bg="bg-blue-500" title="Agregar" href="{{ route('antibioticos.existencia.create',$medicamento->id) }}" size="2xl" hover="bg-blue-300" />
        </div>
    </div>
  </div>
@endsection()

@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-10 justify-items-center text-center">
    <div class="w-[90%] flex flex-row-reverse">
      <x-anchor bg="bg-gray-500" title="Agregar otro Antibiotico" href="{{ route('doctor.create') }}" size="lg" hover="bg-gray-300" />
    </div>
    <div class="w-170 p-10 bg-green-500 border rounded-4xl">
      <h1 class="text-3xl text-white mb-5 font-bold">¡¡Antibiotico dado de alta exitosamente!!</h1>
      <div class="bg-gray-200 w-[100%] border mb-5">
        <h1 class="text-2xl font-bold">DATOS DEL ANTIBIOTICO</h1>
        <h1 class="text-lg">Nombre: {{ $medicamento->nombre }} </h1>
        <h1 class="text-lg">Presentación: {{ $medicamento->presentacion }}</h1>
        <h1 class="text-lg">Miligramos: {{ $medicamento->mg }}mg</h1>
      </div>
      <h1 class="text-2xl text-white mb-5">Antibiotico no cuenta con existencia ¿Desea agregarla?</h1>
      <div class="flex justify-between">
          <x-anchor bg="bg-red-500" title="En otro momento" href="{{ route('antibioticos.index') }}" size="lg" hover="bg-red-300" />
          <x-anchor bg="bg-blue-500" title="Agregar existencia" href="{{ route('antibioticos.existencia.create', $medicamento->id) }}" size="lg" hover="bg-blue-300" />
      </div>
    </div>
  </div>
@endsection()

@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-10 justify-items-center text-center">
    <div class="w-[90%] flex flex-row-reverse">
      <x-anchor bg="bg-gray-500" title="Agregar otro Doctor" href="{{ route('doctor.create') }}" size="lg" hover="bg-gray-300" />
    </div>
    <div class="w-170 p-10 bg-green-500 border rounded-4xl">
      <h1 class="text-3xl text-white mb-5 font-bold">¡¡Doctor dado de alta exitosamente!!</h1>
      <div class="bg-gray-200 w-[100%] border mb-5">
        <h1 class="text-2xl font-bold">DATOS DEL DOCTOR</h1>
        <h1 class="text-lg">Nombre: {{ $doctor->nombre }} {{ $doctor->apellidoPaterno }} {{ $doctor->apellidoMaterno }}</h1>
        <h1 class="text-lg">Cedula Profesional: {{ $doctor->cedProf }}</h1>
      </div>
      <h1 class="text-2xl text-white mb-5">Doctor no cuenta con domicilio ¿Desea agregarlo?</h1>
      <div class="flex justify-between">
          <x-anchor bg="bg-red-500" title="En otro momento" href="{{ route('doctor.index') }}" size="lg" hover="bg-red-300" />
          <x-anchor bg="bg-blue-500" title="Agregar Domicilio" href="{{ route('doctor.direcciones.create',$doctor->id) }}" size="lg" hover="bg-blue-300" />
      </div>
    </div>
  </div>
@endsection()

@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-10 justify-items-center text-center">
    <div class="w-[90%] flex justify-between items-center ml-[5%] mr-[5%]">
      <x-anchor bg="bg-red-500" title="Cancelar" href="{{ route('carrito.index') }}" size="2xl" hover="bg-red-300"/>
      <x-anchor bg="bg-gray-500" href="{{ route('carrito.createDoctor') }}" title="Agregar Doctor" size="2xl" hover="bg-gray-300"/>
    </div>
    <div class="w-170 p-10 bg-blue-500 border shadow-2xl rounded-4xl">
      <h1 class="text-4xl font-bold text-white mb-5">SELECCIÓN DE DOCTOR</h1>
      <form
        class="w-[100%] flex flex-col items-center"
        action="{{ route('carrito.create') }}"
        method="GET"
      >
        <select class="bg-white text-center" name="doctor_id" id="doctor_id">
          <option selected disabled>--- Seleccione un doctor ---</option>
          @forelse ($doctores as $doctor)
            <option 
              value="{{ $doctor->id }}"
              {{ old('doctor_id') == $doctor->id ? 'selected' : '' }} 
            > 
              {{ $doctor->nombre }} {{ $doctor->apellidoPaterno }} {{ $doctor->apellidoMaterno }} 
            </option>
          @empty
            <option disabled>--- No hay doctor agregado ---</option>
          @endforelse
        </select>
        <x-errormessage attribute="doctor_id"/>
        @error('doctor_id')
          @if (Str::contains($message, 'El doctor no tiene domicilio asignado'))
              <x-anchor bg="bg-gray-500" title="Agregar Direccion" href="{{ route('carrito.createDomicilio', old('doctor_id')) }}" hover="bg-gray-300"/>
          @endif
        @enderror
        <button type="submit" class="mt-2 p-2 text-white font-bold text-lg rounded-2xl bg-green-500 w-[25%] hover:bg-green-300 ">Siguiente</button>
      </form>
    </div>
  </div>
@endsection()

@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-10 justify-items-center text-center">
    <div class="w-[90%] flex justify-between items-center ml-[5%] mr-[5%]">
      <x-anchor bg="bg-red-500" title="Cancelar" href="{{ route('carrito.index') }}" size="2xl" hover="bg-red-300" />
      <x-anchor bg="bg-gray-500" title="Agregar Direccion" href="{{ route('carrito.createDomicilio', $doctor->id) }}" size="2xl" hover="bg-gray-300"/>
    </div>
    <div class="w-170 p-10 bg-blue-500 border shadow-2xl rounded-4xl">
        <h1 class="text-4xl font-bold text-white mb-5">TERMINAR CARRITO</h1>
        <input class="w-[50%] bg-white text-center mb-10" value="{{ $doctor->nombre }} {{ $doctor->apellidoPaterno }} {{ $doctor->apellidoMaterno }}" disabled>
        <form
          class="w-[100%] flex flex-col items-center"
          action="/movimientos/store"
          method="POST"
        >
        @csrf
        @method('POST')
          <select class="bg-white w-[50%] text-center" id="domicilio" name="domicilio">
            <option selected disabled>--- Seleccione un domicilio ---</option>
            @forelse ($domicilios as $domicilio)
              <option value="{{ $domicilio->domicilio }}"> {{ $domicilio->domicilio }} </option>
            @empty
              <option disabled>--- No hay domicilio agregado ---</option>
            @endforelse
          </select>
          <x-errormessage attribute="domicilio"/>
          <x-forminput id="receta" title="Receta" text="white" size="lg" mt="0"/>
          <x-errormessage attribute="receta"/>
          <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
          <x-errormessage attribute="doctor_id"/>
          <button type="submit" class="mt-2 p-2 text-white font-bold text-lg rounded-2xl bg-green-500 w-[25%] hover:bg-green-300 ">Terminar</button>
        </form>
    </div>
  </div>
@endsection()

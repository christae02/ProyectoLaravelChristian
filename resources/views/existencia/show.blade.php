@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-10 justify-items-center text-center">
    <div class="w-full flex ml-[5%] mb-5">
        <x-anchor bg="bg-red-500" title="Regresar" href="/antibioticos" hover="bg-red-300" size="3xl"/>
    </div>
    <div class="flex w-full">
        <div class="flex-col h-[50%] mb-10 justify-items-center ml-[5%] w-[35%] p-10 bg-gradient-to-br from-emerald-400 via-green-500 to-teal-600 shadow-2xl border rounded-4xl">
            <h1 class="ml-10 text-white text-3xl bold"> {{ $medicamentos->nombre }}</h1>
            <img class="w-[200px] h-[150px] mt-[2%] mb-[2%]" src="{{ asset('images/'.$medicamentos->imagen) }}" alt="Error">
            <h1 class="ml-10 text-white text-2xl bold"> {{ $medicamentos->mg }}mg </h1>
            <h1 class="ml-10 text-white text-2xl bold">{{ $medicamentos->presentacion }}</h1>
        </div>
        <div class="w-[60%] justify-items-center">
            <div class="w-full flex justify-end mr-[10%] mb-[5%]">
                <x-anchor bg="bg-blue-500" title="Nueva Existencia" href="{{ route('antibioticos.existencia.create',$medicamentos->id) }}" hover="bg-blue-300" size="3xl"/>
            </div>
            <div class="flex-col w-[90%]">
                @forelse ($existencias as $existencia)
                    <div class="flex rounded text-white bg-gray-500 rounded-4xl border pl-4 pr-4 pt-10 pb-10 w-full mt-[2%] mb-[2%]">
                        <div class="flex w-[80%]">
                            <h1 class="bg-white rounded-4xl text-black text-lg p-2 mr-[1%]">Lote: {{ $existencia->lote }}</h1>
                            <h1 class="bg-white rounded-4xl text-black text-lg p-2 mr-[1%]">Fecha Caducidad: {{ $existencia->fecha_cad->translatedFormat('F Y') }}</h1>
                            <h1 class="bg-white rounded-4xl text-black text-lg p-2 mr-[1%]">Total: {{ $existencia->existencias }}</h1>
                        </div>
                        <div class="flex w-[20%] justify-end">
                            <x-anchor bg="bg-yellow-500" title="Editar" href="#" hover="bg-yellow-300"/>
                            <x-anchor bg="bg-blue-500" title="Existencias" href="#" hover="bg-blue-300"/>
                        </div>
                    </div>
                @empty
                    <div class="flex rounded text-white bg-gray-500 rounded-4xl border py-4 pt-10 pb-10 w-full mt-[2%] mb-[2%] justify-center">
                        <h1>No hay existencias</h1>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
  </div>
@endsection()

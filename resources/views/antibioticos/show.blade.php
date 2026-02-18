@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-10 justify-items-center text-center">
    <div class="w-full flex ml-[5%] mb-5">
        <x-anchor bg="bg-red-500" title="Regresar" href="/antibioticos" hover="bg-red-300" size="3xl"/>
    </div>
    <div class="flex w-full">
        <div class="ml-[5%] w-[35%]">
            <div>
                <h1 class="text-8xl font-bold">{{ $total }}</h1>
            </div>
            <div class="flex-col h-[70%] mb-10 justify-items-center p-10 bg-blue-300 shadow-2xl rounded-4xl">
                <h1 class="text-white text-3xl font-bold"> {{ $medicamentos->nombre }}</h1>
                <h1 class="text-white text-2xl font-bold"> {{ $medicamentos->mg }}mg </h1>
                <h1 class="text-white text-2xl font-bold">{{ $medicamentos->presentacion }}</h1>
                <img class="w-[200px] h-[150px] mt-[2%] mb-[2%] rounded-lg" src="{{ asset('images/'.$medicamentos->imagen) }}" alt="Error">
            </div>
        </div>
        <div class="w-[60%] justify-items-center">
            <div class="w-full flex justify-end mr-[10%] mb-[5%]">
                <x-anchor bg="bg-green-500" title="Nueva Existencia" href="{{ route('antibioticos.existencia.create',$medicamentos->id) }}" hover="bg-green-300" size="3xl"/>
            </div>
            <div class="flex-col w-[90%]">
                @forelse ($existencias as $existencia)
                    <div class="flex bg-green-300 hover:bg-green-200 transition rounded-4xl pl-4 pr-4 pt-10 pb-10 w-full mt-[2%] mb-[2%]">
                        <div class="flex w-[80%]">
                            <h1 class="bg-white rounded-4xl text-black text-lg p-2 mr-[1%]">Lote: {{ $existencia->lote }}</h1>
                            <h1 class="bg-white rounded-4xl text-black text-lg p-2 mr-[1%]">Fecha Caducidad: {{ $existencia->fecha_cad->locale('es')->translatedFormat('F Y') }}</h1>
                            <h1 class="bg-white rounded-4xl text-black text-lg p-2 mr-[1%]">Total: {{ $existencia->existencias }}</h1>
                        </div>
                        <div class="flex w-[20%] justify-end">
                            <x-anchor bg="bg-amber-500" title="Editar" href="{{ route('antibioticos.existencia.edit',$existencia->id) }}" hover="bg-amber-300"/>
                            <x-anchor bg="bg-blue-500" title="Agregar" href="{{ route('antibioticos.existencia.editCantidad',$existencia->id) }}" hover="bg-blue-300"/>
                        </div>
                    </div>
                @empty
                    <div class="flex rounded text-white bg-gray-500 rounded-4xl border py-4 pt-10 pb-10 w-full mt-[2%] mb-[2%] justify-center">
                        <h1>No hay existencias</h1>
                    </div>
                @endforelse

            </div>

            {{ $existencias->links() }}

        </div>
    </div>
  </div>
@endsection()

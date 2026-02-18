@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-10 justify-items-center text-center">
    <div class="w-full flex ml-[5%] mb-5">
        <x-anchor bg="bg-red-500" title="Regresar" href="/doctor" hover="bg-red-300" size="3xl"/>
    </div>
    <div class="flex w-full">
        <div class="flex-col h-[50%] mb-10 justify-items-center ml-[5%] w-[35%] p-10 bg-blue-300 shadow-2xl rounded-4xl">
            <h1 class="text-white text-3xl font-bold"> DOCTOR: </h1>
            <h1 class="bg-white rounded-3xl p-2 text-2xl font-bold"> {{ $doctor->nombre.' '.$doctor->apellidoPaterno.' '.$doctor->apellidoMaterno}}</h1>
            <h1 class="text-white text-3xl font-bold mt-[5%]">Cedula Profesional: </h1>
            <h1 class="bg-white rounded-3xl p-2 text-2xl font-bold">{{ $doctor->cedProf }} </h1>
        </div>
        <div class="w-[60%] justify-items-center">
            <div class="w-full flex justify-end mr-[10%] mb-[5%]">
                <x-anchor bg="bg-green-500" title="Nueva Dirección" href="{{ route('doctor.direcciones.create',$doctor->id) }}" hover="bg-green-300" size="3xl"/>
            </div>
            <div class="flex-col w-[90%]">
                @forelse ($direcciones as $direccion)
                    <div class="flex bg-green-300 hover:bg-green-200 transition rounded-4xl pl-4 pr-4 pt-10 pb-10 w-full mt-[2%] mb-[2%]">
                        <div class="flex w-[80%]">
                            <h1 class="bg-white rounded-4xl text-black text-lg p-2 mr-[1%]">Dirección: {{ $direccion->domicilio }}</h1>
                        </div>
                        <div class="flex w-[20%] justify-end">
                            <x-anchor bg="bg-yellow-500" title="Editar" href="#" hover="bg-yellow-300"/>
                        </div>
                    </div>
                @empty
                    <div class="flex bg-green-300 rounded-4xl py-4 pt-10 pb-10 w-full mt-[2%] mb-[2%] justify-center">
                        <h1 class="text-white text-2xl font-bold">No hay direcciones</h1>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
  </div>
@endsection()

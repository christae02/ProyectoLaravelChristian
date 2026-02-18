@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-5 justify-items-center">

    <div class="flex justify-between items-center w-full p-10">
      <div>
        <h1 class="text-blue-800 text-6xl font-bold ml-[180%]">DOCTORES</h1>
      </div>

      <div>
        <x-anchor bg="bg-green-500" title="Nuevo Doctor" size="2xl" href="{{ route('doctor.create') }}" hover="bg-green-300"/>    
      </div>

    </div>

    <div class="bg-gray-200 w-[80%] p-10 justify-items-center text-center">
        <table class="table-fixed w-full mt-5">
            <thead class="text-white bg-blue-500 bold">
                <tr>
                    <x-tabledata type="th" data="Nombre"/>
                    <x-tabledata type="th" data="Apellido Paterno"/>
                    <x-tabledata type="th" data="Apellido Materno"/>
                    <x-tabledata type="th" data="Cedula Profesional"/>
                    <x-tabledata type="th" data=""/>
                </tr>
            </thead>
            <tbody class="bg-white text-center">
                @forelse ($doctor as $doc)
                <tr class="transition hover:bg-blue-200">
                    <x-tabledata type="td" data="{{ $doc->nombre }}"/>
                    <x-tabledata type="td" data="{{ $doc->apellidoPaterno }}"/>
                    <x-tabledata type="td" data="{{ $doc->apellidoMaterno }}"/>
                    <x-tabledata type="td" data="{{ $doc->cedProf }}"/>
                    <td class="p-0 border">
                        <div class="flex w-full h-full ml-5 mr-5 pt-4 pb-4">
                            <x-anchor bg="bg-amber-500 mr-2" title="Editar" href="#" hover="bg-amber-300"/>    
                            <x-anchor title="Direcciones" href="{{ route('doctor.show',$doc->id) }}" bg="bg-green-500" hover="bg-green-300"/>
                        </div>  
                    </td>
                </tr>
                @empty
                    <h3>No hay doctores registrados</h3>
                @endforelse
            </tbody>
        </table>
        <div class="mt-[5%]">
            {{ $doctor->links() }}
        </div>
    </div>
  </div>
@endsection
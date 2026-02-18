@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-2 justify-center w-full">
    <div class="flex justify-between items-center w-full p-10">
      <div>
        <h1 class="text-6xl text-blue-800 font-bold ml-[100%]">ANTIBIOTICOS</h1>
      </div>

      <div>
        <x-anchor bg="bg-green-500" title="Nuevo Antibiotico" size="2xl" href="{{ route('antibioticos.create') }}" hover="bg-green-300"/>    
      </div>

    </div>

    <div class="mx-[10%] w-[80%]">

      <div class="m-6 p-10 bg-gray-200 rounded-4xl shadow-lg justify-items-center">
        <table class="mb-5 rounded-2xl">

          <thead class="text-white bold bg-blue-700">
            <tr>
              <x-tabledata type="th" data="Nombre"/>
              <x-tabledata type="th" data="Presentación"/>
              <x-tabledata type="th" data="Miligramos"/>
              <x-tabledata type="th" data="Imagen"/>
              <x-tabledata type="th" data=""/>
            </tr>
          </thead>

          <tbody class="bg-white">
            @forelse ($medicamentos as $medicamento)
              <tr class="hover:bg-blue-200 transition">
                <x-tabledata type="td" data="{{ $medicamento->nombre }}"/>
                <x-tabledata type="td" data="{{ $medicamento->presentacion }}"/>
                <x-tabledata type="td" data="{{ $medicamento->mg }}"/>
                <td class="border justify-items-center">
                  <img class="w-[60%] h-[60%]" src="{{ asset('images/'.$medicamento->imagen) }}">
                </td>
                <td class="p-0 border">
                  <div class="flex w-full h-full ml-5 mr-5">
                    <x-anchor bg="bg-amber-500 mr-2" title="Editar" href="{{ route('antibioticos.edit',$medicamento->id) }}" hover="bg-amber-300"/>    
                    <x-anchor bg="bg-green-500" title="Existencia" href="{{ route('antibioticos.show',$medicamento->id) }}" hover="bg-green-300"/>
                  </div>  
                </td>
              </tr>
            @empty
              
            @endforelse
            </tbody>
        </table>

        {{ $medicamentos->links() }}

      </div>

    </div>
    
  </div>
@endsection
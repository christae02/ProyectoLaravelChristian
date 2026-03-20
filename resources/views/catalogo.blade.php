@extends('layouts.app')
@section('content')
  <div>
    <div class="flex justify-between items-center m-[2%]">
      <div>
        <h1 class="text-4xl text-blue-500 font-bold">CATALOGO</h1>
      </div>
      <div>
        <form method="GET" action="{{ route('catalogo.search') }}">
          <div class="bg-gray-200 rounded-lg px-3 py-2 flex items-center gap-2">
            
            <input
              name="nombre"
              id="nombre"
              placeholder="Buscar..."
              type="text"
              value="{{ request('nombre') }}"
              onchange="this.form.submit()"
              class="bg-white px-4 rounded-l-lg outline-none h-12 w-full"
            >

            <button type="submit" class="bg-white hover:bg-gray-200 h-12 w-12 flex items-center justify-center rounded-r-lg">
              <img 
                src="{{ asset('images/lupa.png') }}" 
                alt="Buscar"
                class="w-full h-full object-contain"
              >
            </button>

          </div>
        </form>
      </div>
    </div>
    <div class="flex flex-wrap m-15 justify-center">
    
      @forelse ($existencias as $existencia)
        <x-catalogodata 
          presentacion="{{ $existencia->medicamento->nombre }}"
          mg="{{ $existencia->medicamento->mg }}"
          fecha=" {{ $existencia->fecha_cad->locale('es')->translatedFormat('F Y') }}"
          lote="{{ $existencia->lote }}"
          existencia="{{ $existencia->existencias }}"
          imagen="{{ $existencia->medicamento->imagen }}"
          id="{{ $existencia->id }}"
        />
      @empty
        <div class="flex flex-col items-center gap-4">
          <h1 class="text-4xl font-bold">No existen antibioticos, Ingrese uno</h1>
          <x-anchor href="{{ route('antibioticos.create') }}" size="2xl" title="Crear Antibioico" bg="bg-green-500" hover="bg-green-200"/>
        </div>
      @endforelse

      

    </div>
    <div class="w-[100%] flex justify-center mb-5">
      {{ $existencias->links() }}
    </div>
  </div>
@endsection()

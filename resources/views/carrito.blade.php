@extends('layouts.app')
@section('content')
    <div class="flex flex-col p-10">
        <div class="flex flex-row-reverse w-[100] mb-[3%]">
            <x-anchor title="Ir a Catalogo" href="{{ route('catalogo.index') }}" bg="bg-blue-500" size="2xl" hover="bg-blue-300"/>
        </div>
        <div class="flex flex-col justify-center">
            @forelse ($carrito as $carro)
                <x-carritoitem 
                    id="{{ $carro->id }}" 
                    img="{{ $carro->existencia->medicamento->imagen }}" 
                    desc="{{ $carro->existencia->medicamento->nombre }} {{ $carro->existencia->medicamento->presentacion }} {{ $carro->existencia->medicamento->mg }}mg" 
                    lote="{{ $carro->existencia->lote }}" 
                    fecha="{{ $carro->existencia->fecha_cad->locale('es')->translatedFormat('F Y') }}" 
                    cantidad="{{ $carro->cantidad }}"
                />
            @empty
                <h1 class="w-[100%] text-6xl font-bold text-center"> No hay registros, favor de Ir a Catalogo</h1>
            @endforelse
        </div>
        <div class="w-[100%] flex flex-row-reverse">
            @if ($carrito->isNotEmpty())
                <x-anchor href="{{ route('carrito.doctor') }}" bg="bg-green-500" size="2xl" hover="bg-green-300" title="Terminar"/>
            @endif
        </div>
    </div>
@endsection
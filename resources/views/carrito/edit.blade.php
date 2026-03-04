@extends('layouts.app')
@section('content')

    <script>
        function sumar(){
            var inputCantidad = document.getElementById('cantidad');
            var cantidad = parseInt(document.getElementById('cantidad').value);
            var existencias = parseInt(document.getElementById('existencias').value);
            if(cantidad < existencias)
            {
                inputCantidad.value = cantidad + 1;
            }
        }

        function restar(){
            var cantidad = document.getElementById('cantidad');
            if(cantidad.value > 1){
                cantidad.value = cantidad.value-1;
            }
        }

    </script>

  <div class="flex-col mb-37 mt-10 justify-items-center text-center">
    <div class="w-full flex ml-[5%]">
        <x-anchor bg="bg-red-500" title="Regresar" href="{{ route('carrito.index') }}" hover="bg-red-300" size="3xl"/>
    </div>
    <div class="w-[35%] p-10 bg-gray-200 rounded-4xl shadow-lg">
        <h1 class="text-4xl text-blue-500 font-bold mb-5">CAMBIAR CANTIDAD A CARRITO:</h1>
        <h1 class="text-lg font-bold mb-5">CANTIDAD MÁXIMA: {{ $carrito->existencia->existencias }} </h1>
        <input type="hidden" value="{{ $carrito->existencia->existencias }}" id="existencias">
        <form 
            class="bg-gray" 
            method="POST" 
            action="{{ route('carrito.update',$carrito->id) }}"
        >
            @method('POST')
            @csrf

            <div class="flex flex-col items-center w-[100%]">
                <input class="w-[40%] text-center text-8xl font-bold" type="number" id="cantidad" name="cantidad" value="{{ $carrito->cantidad }}" readonly>
                <input type="hidden" value="{{ $carrito->existencia->id }}" id="existencia_id" name="existencia_id">
                <x-errormessage attribute="cantidad"/>
            </div>

            <div>
                <button type="button" class="bg-gray-600 w-[10%] text-white font-bold text-2xl p-2 text-center" onclick="restar()">-</button>
                <button type="button" class="bg-gray-600 w-[10%] text-white font-bold text-2xl p-2 text-center" onclick="sumar()">+</button>
            </div>

            <button type="submit" class="mt-5 bg-green-500 rounded-4xl font-bold text-lg text-white p-2 hover:bg-green-300">Cambiar</button>

        </form>
    </div>
  </div>
@endsection()
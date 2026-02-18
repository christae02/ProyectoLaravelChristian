@extends('layouts.app')
@section('content')

    <script>
        function sumar(){
            var input = document.getElementById('existencias');
            input.value = parseInt(input.value) + 1;
        }

        function restar(){
            var input = document.getElementById('existencias');
            if(input.value > 0){
                input.value = input.value-1;
            }
        }

    </script>

  <div class="flex-col mb-37 mt-10 justify-items-center text-center">
    <div class="w-full flex ml-[5%]">
        <x-anchor bg="bg-red-500" title="Regresar" href="/antibioticos/{{ $existencia->medicamento_id }}" hover="bg-red-300" size="3xl"/>
    </div>
    <div class="w-[35%] p-10 bg-gray-200 rounded-4xl shadow-lg">
        <h1 class="text-4xl text-blue-500 font-bold mb-5">AGREGAR EXISTENCIA A LOTE:</h1>
        <h1 class="bg-white rounded-4xl text-4xl font-bold mb-5">{{ $existencia->lote }}</h1>
        <form 
            class="bg-gray" 
            method="POST" 
            action="{{ route('antibioticos.existencia.updateCantidad',$existencia->id) }}"
        >
            @method('POST')
            @csrf

            <input class="w-[40%] text-center text-8xl font-bold" type="number" id="existencias" name="existencias" value="0" readonly>
            <x-errormessage attribute="existencias"/>

            <div>
                <button type="button" class="bg-gray-600 w-[10%] text-white font-bold text-2xl p-2 text-center" onclick="restar()">-</button>
                <button type="button" class="bg-gray-600 w-[10%] text-white font-bold text-2xl p-2 text-center" onclick="sumar()">+</button>
            </div>

            <button type="submit" class="mt-5 bg-green-500 rounded-4xl font-bold text-lg text-white p-2 hover:bg-green-300">Agregar</button>

        </form>
    </div>
  </div>
@endsection()
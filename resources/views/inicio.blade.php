@extends('layouts.app')
@section('content')
  <div class="flex mb-37 mt-10 justify-items-center">

    <div class="flex justify-center ml-[7%] mr-[3%] w-[70%]">
      <div class="bg-gray-200 p-7 justify-items-center rounded-4xl">

            <div class="flex justify-between items-center w-full">
                <div>
                    <h1 class="text-4xl text-blue-500 font-bold">MOVIMIENTOS</h1>
                </div>
                <div>
                    <form method="GET" action="{{ route('movimientos.search') }}">
                        <input
                            class="bg-white"
                            name="buscar"
                            id="buscar"
                            placeholder="Buscar..."
                            type="text"
                            onchange="this.form.submit()"
                            value="{{ request('buscar') }}"
                        >
                    </form>
                </div>
            </div>



            <table class="mt-5 mb-10 text-sm/2 leading-tight">
                <thead class="text-white bg-blue-500">
                    <tr>
                        <x-tabledata type="th" data="FECHA"/>
                        <x-tabledata type="th" data="TIPO"/>
                        <x-tabledata type="th" data="DENOMINACION DISTINTIVA/GENERICA"/>
                        <x-tabledata type="th" data="PRESENTACION DEL ANTIBIOTICO"/>
                        <x-tabledata type="th" data="CANTIDAD"/>
                        <x-tabledata type="th" data="LOTE"/>
                        <x-tabledata type="th" data="FECHA DE CADUCIDAD"/>
                        <x-tabledata type="th" data="NOMBRE DE QUIEN PRESCRIBE"/>
                        <x-tabledata type="th" data="CEDULA PROFESIONAL"/>
                        <x-tabledata type="th" data="DOMICILIO"/>
                        <x-tabledata type="th" data="SE RETIENE RECETA / NO. CONSECUTIVO"/>
                        <x-tabledata type="th" data="EXISTENCIA"/>
                    </tr>
                </thead>
                <tbody class="text-center bg-white">
                    @forelse ($movimientos as $movimiento)
                        <tr class="hover:bg-blue-300 transition">
                            <x-tabledata type="td" data="{{ $movimiento->fecha }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->tipo }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->existencia->medicamento->nombre }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->existencia->medicamento->presentacion }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->cantidad }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->existencia->lote }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->existencia->fecha_cad->locale('es')->translatedFormat('F Y') }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->doctor->nombre ?? '--------' }} {{ $movimiento->doctor->apellidoPaterno ?? '' }} {{ $movimiento->doctor->apellidoMaterno ?? ''}}"/>
                            <x-tabledata type="td" data="{{ $movimiento->doctor->cedProf ?? '--------' }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->domicilio ?? '--------'}}"/>
                            <x-tabledata type="td" data="{{ $movimiento->receta ?? '--------'}}"/>
                            <x-tabledata type="td" data="{{ $movimiento->nueva_existencia }}"/>
                        </tr>
                    @empty
                        <tr>
                            <td>No hay registros</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $movimientos->links() }}
      </div>
    </div>

    <div class="flex-col justify-items-center text-center w-[20%] mt-[2%]">
      <button class="pr-10 pl-10 p-3 bg-green-500 font-bold rounded-4xl text-2xl text-white hover:bg-green-300"><a href="/catalogo">Nueva venta</a></button>
    </div>

  </div>
@endsection()
    

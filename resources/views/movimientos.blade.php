@extends('layouts.app')
@section('content')
    <div class="flex mb-37 mt-10 justify-center">
      <div class="bg-gray-300 ml-25 mr-25 p-15 justify-items-center">

        <div>
            <h1 class="text-4xl">Movimientos</h1>
            
        </div>

            <table class="w-full mt-5">
                <thead>
                    <tr>
                        <x-tabledata type="th" data="FECHA"/>
                        <x-tabledata type="th" data="TIPO"/>
                        <x-tabledata type="th" data="DENOMINACION DISTINTIVA/GENERICA"/>
                        <x-tabledata type="th" data="PRESENTACION DEL ANTIBIOTICO"/>
                        <x-tabledata type="th" data="CANTIDAD"/>
                        <x-tabledata type="th" data="LOTE"/>
                        <x-tabledata type="th" data="FECHA DE CADUCIDAD"/>
                        <x-tabledata type="th" data="NOBRE DE QUIEN PRESCRIBE"/>
                        <x-tabledata type="th" data="CEDULA PROFESIONAL"/>
                        <x-tabledata type="th" data="DOMICILIO"/>
                        <x-tabledata type="th" data="SE RETIENE RECETA / NO. CONSECUTIVO"/>
                        <x-tabledata type="th" data="EXISTENCIA"/>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @forelse ($movimientos as $movimiento)
                        <tr>
                            <x-tabledata type="td" data="{{ $movimiento->fecha }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->tipo }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->existencia->medicamento->nombre }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->existencia->medicamento->presentacion }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->cantidad }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->existencia->lote }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->existencia->fecha_cad }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->doctor->nombre }} {{ $movimiento->doctor->apellidoPaterno }} {{ $movimiento->doctor->apellidoMaterno }}"/>
                            <x-tabledata type="td" data="{{ $movimiento->doctor->cedProf }}"/>
                            <x-tabledata type="td" data="Por alli"/>
                            <x-tabledata type="td" data="{{ $movimiento->receta }}"/>
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
@endsection()
    
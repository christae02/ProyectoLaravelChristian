@extends('layouts.app')
@section('content')
  <div class="flex mb-37 mt-10 justify-center">
    <div class="bg-gray-300 ml-25 mr-25 p-15 justify-items-center">
        <h1 class="text-4xl">Ventas</h1>
        
        <table class="table-fixed w-full mt-5 mb-5">
            <thead>
                <tr>
                    <x-tabledata type="th" data="Fecha y Hora"/>
                    <x-tabledata type="th" data="Nombre"/>
                    <x-tabledata type="th" data="Presentaciom"/>
                    <x-tabledata type="th" data="Lote"/>
                    <x-tabledata type="th" data="Cantidad"/>
                    <x-tabledata type="th" data="Nombre de quien prescribe"/>
                    <x-tabledata type="th" data="Cedula Profesional"/>
                    <x-tabledata type="th" data="Domicilio"/>
                    <x-tabledata type="th" data="Se retiene receta"/>
                    <x-tabledata type="th" data=""/>
                </tr>
            </thead>
            <tbody class="text-center">

                @forelse ($ventas as $venta)
                    <tr>
                        <x-tabledata type="td" data="{{ $venta->fecha }}"/>
                        <x-tabledata type="td" data="{{ $venta->existencia->medicamento->nombre }}"/>
                        <x-tabledata type="td" data="{{ $venta->existencia->medicamento->presentacion }}"/>
                        <x-tabledata type="td" data="{{ $venta->existencia->lote }}"/>
                        <x-tabledata type="td" data="{{ $venta->cantidad }}"/>
                        <x-tabledata type="td" data="{{ $venta->doctor->nombre }} {{ $venta->doctor->apellidoPaterno }} {{ $venta->doctor->apellidoMaterno }}"/>
                        <x-tabledata type="td" data="{{ $venta->doctor->cedProf }}"/>
                        <x-tabledata type="td" data="Por alli"/>
                        <x-tabledata type="td" data="{{ $venta->receta }}"/>
                        <td class="bg-white p-1 border"><button class="bg-red-500 text-white">Dar de Baja</button></td>
                    </tr>
                @empty
                    
                @endforelse
            </tbody>
        </table>

        {{ $ventas->links() }}
    </div>

  </div>
@endsection()
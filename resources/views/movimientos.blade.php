@extends('layouts.app')
@section('content')
    <div class="flex mb-37 mt-10 justify-center">
      <div class="bg-gray-300 ml-25 mr-25 p-15 justify-items-center">
            <h1 class="text-4xl">Movimientos</h1>
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
                    <tr>
                        <x-tabledata type="td" data="10-12-2025"/>
                        <x-tabledata type="td" data="Salida"/>
                        <x-tabledata type="td" data="Amoxicilina 250mg"/>
                        <x-tabledata type="td" data="Amoxin"/>
                        <x-tabledata type="td" data="1"/>
                        <x-tabledata type="td" data="1525415"/>
                        <x-tabledata type="td" data="Mayo 2026"/>
                        <x-tabledata type="td" data="Fernando Daniel Escobar Gomez"/>
                        <x-tabledata type="td" data="185265120"/>
                        <x-tabledata type="td" data="Antonio Albarran 256"/>
                        <x-tabledata type="td" data="1525415"/>
                        <x-tabledata type="td" data="3"/>
                    </tr>
                    <tr>
                        <x-tabledata type="td" data="10-12-2025"/>
                        <x-tabledata type="td" data="Salida"/>
                        <x-tabledata type="td" data="Ceftriaxona 500mg"/>
                        <x-tabledata type="td" data="Ceftriaxona"/>
                        <x-tabledata type="td" data="2"/>
                        <x-tabledata type="td" data="2516985"/>
                        <x-tabledata type="td" data="Abril 2027"/>
                        <x-tabledata type="td" data="Fernando Daniel Escobar Gomez"/>
                        <x-tabledata type="td" data="185265120"/>
                        <x-tabledata type="td" data="Antonio Albarran 256"/>
                        <x-tabledata type="td" data="1525415"/>
                        <x-tabledata type="td" data="5"/>
                    </tr>
                    <tr>
                        <x-tabledata type="td" data="10-12-2025"/>
                        <x-tabledata type="td" data="Entrada"/>
                        <x-tabledata type="td" data="Ceftriaxona 500mg"/>
                        <x-tabledata type="td" data="Ceftriaxona"/>
                        <x-tabledata type="td" data="3"/>
                        <x-tabledata type="td" data="2516985"/>
                        <x-tabledata type="td" data="Abril 2027"/>
                        <x-tabledata type="td" data="--------"/>
                        <x-tabledata type="td" data="--------"/>
                        <x-tabledata type="td" data="--------"/>
                        <x-tabledata type="td" data="--------"/>
                        <x-tabledata type="td" data="15"/>
                    </tr>
                </tbody>
            </table>
      </div>
    </div>
@endsection()
    
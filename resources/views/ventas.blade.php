@extends('layouts.app')
@section('content')
  <div class="flex mb-37 mt-10 justify-center">
    <div class="bg-gray-300 ml-25 mr-25 p-15 justify-items-center">
        <h1 class="text-4xl">Ventas</h1>
        
        <table class="w-full mt-5">
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
                <tr>
                    <x-tabledata type="td" data="10-12-2025 15:35:00"/>
                    <x-tabledata type="td" data="Amoxicilina 250mg"/>
                    <x-tabledata type="td" data="Amoxin"/>
                    <x-tabledata type="td" data="1"/>
                    <x-tabledata type="td" data="1525415"/>
                    <x-tabledata type="td" data="Fernando Daniel Escobar Gomez"/>
                    <x-tabledata type="td" data="185265120"/>
                    <x-tabledata type="td" data="Antonio Albarran 256"/>
                    <x-tabledata type="td" data="1525415"/>
                    <td class="bg-white p-1 border"><button class="bg-red-500 text-white">Dar de Baja</button></td>
                </tr>
                <tr>
                    <x-tabledata type="td" data="10-12-2025 15:35:00"/>
                    <x-tabledata type="td" data="Ceftriaxona 500mg"/>
                    <x-tabledata type="td" data="Ceftriaxona"/>
                    <x-tabledata type="td" data="2"/>
                    <x-tabledata type="td" data="1525415"/>
                    <x-tabledata type="td" data="Fernando Daniel Escobar Gomez"/>
                    <x-tabledata type="td" data="185265120"/>
                    <x-tabledata type="td" data="Antonio Albarran 256"/>
                    <x-tabledata type="td" data="1525415"/>
                    <td class="bg-white p-1 border"><button class="bg-red-500 text-white">Dar de Baja</button></td>
                </tr>
            </tbody>
        </table>
    </div>

  </div>
@endsection()
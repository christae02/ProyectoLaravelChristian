@extends('layouts.app')
@section('content')
  <div class="flex mb-37 mt-10 justify-center">

    <div class="w-100 p-10 bg-gray-300 justify-items-center text-center">
        <h1 class="text-4xl">AGREGAR DOCTOR</h1>
        <form class="bg-gray" action="">
            <x-forminput title="Nombre" id="nombre"/>
            <x-forminput title="Apellido Paterno" id="ape_pat"/>
            <x-forminput title="Apellido Materno" id="ape_mat"/>
            <x-forminput title="Cedula Profesional" id="cedula"/>
        </form>
        <button class="bg-blue-500 text-white p-2">Agregar</button>
    </div>

    <div class="bg-gray-300 ml-25 p-15 justify-items-center">
        <h1 class="text-4xl">Doctores:</h1>
        <table class="w-full mt-5">
            <thead>
                <tr>
                    <x-tabledata type="th" data=""/>
                    <x-tabledata type="th" data="Nombre"/>
                    <x-tabledata type="th" data="Apellido Paterno"/>
                    <x-tabledata type="th" data="Apellido Materno"/>
                    <x-tabledata type="th" data="Cedula Profesional"/>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <x-tabledata type="td" data="1"/>
                    <x-tabledata type="td" data="Fernando Daniel"/>
                    <x-tabledata type="td" data="Escobar"/>
                    <x-tabledata type="td" data="Gomez"/>
                    <x-tabledata type="td" data="2512365478"/>
                </tr>
                <tr>
                    <x-tabledata type="td" data="2"/>
                    <x-tabledata type="td" data="Christian Jesus"/>
                    <x-tabledata type="td" data="Escobar"/>
                    <x-tabledata type="td" data="Gomez"/>
                    <x-tabledata type="td" data="1859623587"/>
                </tr>
                <tr>
                    <x-tabledata type="td" data="3"/>
                    <x-tabledata type="td" data="Lorena"/>
                    <x-tabledata type="td" data="Mondragon"/>
                    <x-tabledata type="td" data="Merida"/>
                    <x-tabledata type="td" data="8569510215"/>
                </tr>
            </tbody>
        </table>
    </div>

  </div>
@endsection()
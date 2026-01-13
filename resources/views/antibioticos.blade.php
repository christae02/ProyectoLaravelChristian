@extends('layouts.app')
@section('content')
  <div class="flex-col mb-37 mt-10 justify-items-center text-center">
    <div class="w-170 p-10 bg-gray-300 border">
      <h1 class="text-4xl">AGREGAR PRODUCTOS</h1>
      <form class="bg-gray" action="">
          <x-forminput title="Nombre" id="nombre"/>
          <x-forminput title="Presentación" id="presentacion"/>
          <x-forminput title="Lote" id="lote"/>
          <x-forminput title="Existencia" id="existencia"/>
          <x-forminput title="Fecha de Caducidad" id="fecha_cad"/>
          <x-forminput title="Imagen" id="imagen" type="submit" value="Elegir Archivo"/>
      </form>
      <button class="bg-blue-500 text-white p-2">Agregar</button>
    </div>
  </div>
@endsection()

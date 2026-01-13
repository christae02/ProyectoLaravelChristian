@extends('layouts.app')
@section('content')
  <div class="flex flex-wrap m-15 justify-center">

    <x-catalogodata 
      presentacion="Amoxicilina/Acido Clavulanico 250mg/50mg Clamoxin Suspension"
      fecha=" Enero 2025"
      lote="233511"
      existencia="4"
      imagen="images/clamoxin.jpg"
    />

    <x-catalogodata 
      presentacion="Ceftriaxona 1G Traxicoll IntraMuscular"
      fecha=" Diciembre 2024"
      lote="23240302"
      existencia="58"
      imagen="images/traxicoll.jpg"
    />

    <x-catalogodata 
      presentacion="Ceftriaxona 1G Traxicoll IntraMuscular"
      fecha=" Diciembre 2024"
      lote="23240302"
      existencia="58"
      imagen="images/traxicoll.jpg"
    />

  </div>
@endsection()

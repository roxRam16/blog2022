@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h2 class="mt-5">Mensaje enviado con éxito</h2>
    <h3 class="mt-5 mb-5">Pulsa <a href="{{route('home.index')}}">aquí</a> para volver al inicio</h3>
@endsection
@extends('layouts.plantilla')
@section('title', 'Cursos'.$curso)
@section('content')

    <div class="container mt-5">
        <div class="row">
        
            <div class="col-lg-11">
                <h2>Detalles del curso: <span class="text-success fw-bolder">{{$curso->name}}</span></h2>
            </div>

            <div class="col-lg-1">
                <a href="{{route('cursos.index')}}" type="button" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
         
            <div class="col-lg-12 mt-3">
                <ul class="list-group">
                    <li class="list-group-item"><span class="text-success fw-bolder">Nombre:</span> {{$curso->name}}</li>
                    <li class="list-group-item"><span class="text-success fw-bolder">Descripción:</span> {{$curso->description}}</li>
                    <li class="list-group-item"><span class="text-success fw-bolder">Categoría:</span> {{$curso->category}}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')

      <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-11">
                <h2>Bienvenido a los cursos de LARAVEL 9</h2>
            </div>
            <div class="col-lg-1">
                <a href="{{route('cursos.create')}}" type="button" class="btn btn-success btn-sm">Nuevo</a>
            </div>
        </div>
        <p>Todos los registros</p>            
        <table class="table table-striped">
          <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th colspan="3">Operaciones</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($cursos as $curso)

            <tr>
                <td>{{$curso->name}}</td>
                <td>{{$curso->description}}</td>
                <td>{{$curso->category}}</td>
                <td><a href="{{route('cursos.show', $curso->id)}}" type="button" class="btn btn-info btn-sm  text-white">Ver</a></td>
                <td> <a href="{{route('cursos.edit', $curso->id)}}" type="button" class="btn btn-primary btn-sm" id="{{$curso->id}}">Editar</a> </td>
                <td><form method="post" action="{{route('cursos.destroy', $curso->id)}}">@csrf @method('delete')<button type="submit" class="btn btn-danger btn-sm" id="{{$curso->id}}">Quitar</button></form></td>
            </tr>
                
            @endforeach

          </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {!!$cursos->links()!!}
        </div>

        

     
      </div>
@endsection
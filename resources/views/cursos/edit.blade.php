@extends('layouts.plantilla')
@section('title', 'Editar curso')
@section('content')

    <div class="container mt-5">
        <div class="row">
        
            <div class="col-lg-11">
                <h2>Editar curso</h2>
            </div>

            <div class="col-lg-1">
                <a href="{{route('cursos.index')}}" type="button" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
         
            <div class="col-lg-12">
                <form method="post" action="{{Route('cursos.update', $curso)}}">
                    
                    @csrf

                    @method('put')

                    <div class="mb-3 mt-3">
                      <label for="name" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{old('name', $curso->name)}}">
                        @error('name')
                            <small class="text-danger">* {{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Descripción</label>
                      <input type="text" class="form-control" id="description" placeholder="" name="description" value="{{old('description', $curso->description)}}">
                        @error('description')
                            <small class="text-danger">* {{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Categoría</label>
                        <input type="text" class="form-control" id="category" placeholder="" name="category" value="{{old('category', $curso->category)}}">
                        @error('category')
                            <small class="text-danger">* {{$message}}</small>
                        @enderror
                    </div>
                   
                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                </form>
            </div>
        </div>
    </div>
@endsection
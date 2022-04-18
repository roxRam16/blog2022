@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="row mt-5 mb-5 d-flex d-flex-row justify-content-center">
            <div class="col-lg-8">
                <h4>Déjanos un mensaje</h4>
            </div>
            <div class="col-lg-8">
                <form action="{{route('contactanos.store')}}" method="post">

                    @csrf

                    <div class="mb-3 mt-3">
                      <label for="text" class="form-label">Nombre completo</label>
                      <input type="text" class="form-control" id="email" placeholder="" name="name" value="{{old('name')}}">
                      @error('name')
                        <p class="text-danger"><strong>{{$message}}</strong></p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Correo electrónico</label>
                      <input type="email" class="form-control" id="email" placeholder="" name="email" value="{{old('email')}}">
                        @error('email')
                            <p class="text-danger"><strong>{{$message}}</strong></p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" placeholder="" name="message">{{old('message')}}</textarea>
                        @error('message')
                            <p class="text-danger"><strong>{{$message}}</strong></p>
                        @enderror
                    </div>

                   
                    <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                </form>

                @if (session('info'))

                    <script>
                        alert("{{session('info')}}");
                    </script>
                    
                @endif
            </div>
        </div>
    </div>
@endsection
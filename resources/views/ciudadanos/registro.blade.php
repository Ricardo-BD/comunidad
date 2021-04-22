@extends('layouts.app2')

@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0 d-flex justify-content-center">
                <!-- Nested Row within Card Body -->
            
                    
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Nuevo ciudadano</h1>
                            </div>
                            <form class="user" method="POST" action="{{route('ciudadanos.store')}}">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="col-sm-8">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" 
                                             style="border-radius: 10rem;
                                                ">
                                                <input class="collapse" type="text" name="estatus" id="estatus" value="No pagada">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-sm-8">Apellido Paterno</label>
                                        <input type="text" class="form-control" id="apellidoP" name="apellidoP" 
                                             style="border-radius: 10rem;
                                                ">
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label class="col-sm-8">Apellido Materno</label>
                                        <input type="text" class="form-control " id="apellidoM" name="apellidoM" 
                                             style="border-radius: 10rem;
                                                ">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-sm-8">Cargo</label>
                                        <select class="form-control" id="idcargo" name="idcargo"
                                        style="border-radius: 10rem;
                                                ">
                                            @foreach ($cargos as $cargo)
                                            <option value="{{$cargo->id}}">{{$cargo->nombre}}</option>
                                             
                                            @endforeach
                                        </select>
                                            <input type="text" class="collapse" id="fecha_inicio" name="fecha_inicio" value="2021-04-20">
                                            <input type="text" class="collapse" id="fecha_termino" name="fecha_termino" value="2021-04-20">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-sm-8">Barrio</label>
                                   <select class="form-control" id="idbarrio" name="idbarrio" 
                                        style="border-radius: 10rem;
                                                ">
                                            @foreach ($barrios as $barrio)
                                            <option value="{{$barrio->id}}">{{$barrio->nombre}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Registrar
                                </button>
                                <hr>
                            </form>
                            <hr>
                        </div>
                    </div>
                
            </div>
        </div>

    </div>
    @endsection
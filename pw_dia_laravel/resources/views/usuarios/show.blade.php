@extends('layouts.plantilla')
@section('titulo', 'Mostrar Usuario')
@section('contenido')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Usuarios <small>Ver Usuario</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="{{url('/')}}"> Dashboard</a>
                        </li>
                        <li>
                            <i class="fa fa-users"></i><a href="{{route('usuarios.index')}}"> Usuarios</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-plus-square"></i> Ver Usuario
                        </li>
                    </ol>
                </div>
            </div>
        @include('partials.errores')
        @include('partials.mensajes')
            <!-- Formulario -->
            <div class="col-md-8 col-md-offset-2">
                <form action="#" method="POST">
                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" value="{{$usuario->nombre}}" disabled name="nombre" required class="form-control" placeholder="Ingrese Nombre">
                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" value="{{$usuario->apellido}}" disabled name="apellido" required class="form-control" placeholder="Ingrese Apellido">
                            @if ($errors->has('apellido'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('apellido') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Correo Electrónico</label>
                            <input type="email" value="{{$usuario->email}}" disabled name="email" class="form-control" required placeholder="Ingrese Correo Electrónico">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Dirección</label>
                            <input type="text" value="{{$usuario->direccion}}" disabled name="direccion" class="form-control" required placeholder="Ingrese Dirección">
                            @if ($errors->has('direccion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="number" value="{{$usuario->telefono}}" disabled name="telefono" class="form-control" required placeholder="Ingrese Teléfono">
                            @if ($errors->has('telefono'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{route('usuarios.index')}}" class="btn btn-danger">Volver Atrás</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Formulario-->
@endsection
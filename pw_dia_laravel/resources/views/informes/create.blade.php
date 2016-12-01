@extends('layouts.plantilla')
@section('titulo', 'Crear informe')
@section('contenido')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        informes <small>Crear informe</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="{{url('/')}}"> Dashboard</a>
                        </li>
                        <li>
                            <i class="fa fa-users"></i><a href="{{route('informes.index')}}"> informes</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-plus-square"></i> Crear informe
                        </li>
                    </ol>
                </div>
            </div>
        @include('partials.errores')
        @include('partials.mensajes')
        <!-- Formulario -->
            <div class="col-md-8 col-md-offset-2">
                <form action="{{route('informes.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('fecha_inicio') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Fecha inicio</label>
                            <input type="text" value="{{date('Y-m-d')}}" readonly name="fecha_inicio"  required class="form-control" placeholder="Ingrese fecha de inicio">
                            @if ($errors->has('fecha_inicio'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_inicio') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('fecha_finalizacion') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Fecha finalizacion</label>
                            <input type="text" value="{{date('Y-m-d')}}" readonly name="fecha_finalizacion"  required class="form-control" placeholder="Ingrese fecha de finalizacion">
                            @if ($errors->has('fecha_finalizacion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_finalizacion') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Crear informe</button>
                        <a href="{{route('informes.index')}}" class="btn btn-danger">Volver Atrás</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Formulario-->
@endsection
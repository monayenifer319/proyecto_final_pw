@extends('layouts.plantilla')
@section('titulo', 'Mostrar compra')
@section('contenido')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        compras <small>Ver compra</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="{{url('/')}}"> Dashboard</a>
                        </li>
                        <li>
                            <i class="fa fa-users"></i><a href="{{route('compras.index')}}"> compras</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-plus-square"></i> Ver compra
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
                    <div class="form-group{{ $errors->has('fecha_registro') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Fecha registro</label>
                            <input type="text" value="{{$compra->fecha_registro}}" disabled name="fecha_registro" required class="form-control" placeholder="Ingrese la fecha registro">
                            @if ($errors->has('fecha_registro'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_registro') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Valor</label>
                            <input type="text" value="{{$compra->valor}}" disabled name="valor" required class="form-control" placeholder="Ingrese el valor">
                            @if ($errors->has('valor'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('valor') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('cantidad') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Cantidad</label>
                            <input type="number" value="{{$compra->cantidad}}" disabled name="cantidad" class="form-control" required placeholder="Ingrese cantidad">
                            @if ($errors->has('cantidad'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cantidad') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{route('compras.index')}}" class="btn btn-danger">Volver Atrás</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Formulario-->
@endsection
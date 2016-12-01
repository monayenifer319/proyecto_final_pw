@extends('layouts.plantilla')
@section('titulo', 'Mostrar compra')
@section('contenido')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        facturas <small>Ver factura</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="{{url('/')}}"> Dashboard</a>
                        </li>
                        <li>
                            <i class="fa fa-users"></i><a href="{{route('compras.index')}}"> facturas</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-plus-square"></i> Ver factura
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
                    <div class="form-group{{ $errors->has('fecha_factura') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Fecha factura</label>
                            <input type="text" value="{{$factura->fecha_factura}}" disabled name="fecha_factura" required class="form-control" placeholder="Ingrese la fecha de la factura">
                            @if ($errors->has('fecha_factura'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_factura') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('valor_total') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Valor total</label>
                            <input type="text" value="{{$factura->valor}}" disabled name="valor_total" required class="form-control" placeholder="Ingrese el valor total">
                            @if ($errors->has('valor_total'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('valor_total') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{route('facturas.index')}}" class="btn btn-danger">Volver Atrás</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Formulario-->
@endsection
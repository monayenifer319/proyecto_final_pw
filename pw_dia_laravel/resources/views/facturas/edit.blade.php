@extends('layouts.plantilla')
@section('titulo', 'Editar factura')
@section('contenido')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        facturas <small>Editar factura</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="{{url('/')}}"> Dashboard</a>
                        </li>
                        <li>
                            <i class="fa fa-users"></i><a href="{{route('facturas.index')}}"> facturas</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-plus-square"></i> Editar factura
                        </li>
                    </ol>
                </div>
            </div>
        @include('partials.errores')
        @include('partials.mensajes')
        <!-- Formulario -->
            <div class="col-md-8 col-md-offset-2">
                <form action="{{route('facturas.update', $factura->id)}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('fecha_factura') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Fecha factura</label>
                            <input type="text" value="{{$factura->fecha_factura}}" name="fecha_factura" required class="form-control" placeholder="Ingrese la fecha de la factura">
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
                            <input type="text" value="{{$factura->valor_total}}" name="valor_total" class="form-control" required placeholder="Ingrese valor total">
                            @if ($errors->has('valor_total'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('valor_total') }}</strong>
                                </span>
                            @endif
                        </div>
                  </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Editar factura</button>
                <a href="{{route('facturas.index')}}" class="btn btn-danger">Volver Atrás</a>
            </div>
            </form>
        </div>
    </div>
    </div>
    <!-- Fin Formulario-->
@endsection
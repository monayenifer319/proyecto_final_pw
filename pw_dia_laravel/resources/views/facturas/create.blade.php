@extends('layouts.plantilla')
@section('titulo', 'Crear factura')
@section('contenido')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        facturas <small>Crear facturas</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="{{url('/')}}"> Dashboard</a>
                        </li>
                        <li>
                            <i class="fa fa-users"></i><a href="{{route('facturas.index')}}"> facturas</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-plus-square"></i> Crear facturas
                        </li>
                    </ol>
                </div>
            </div>
        @include('partials.errores')
        @include('partials.mensajes')
        <!-- Formulario -->
            <div class="col-md-8 col-md-offset-2">
                <form action="{{route('facturas.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('fecha_factura') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Fecha factura</label>
                            <input type="text" value="{{date('Y-m-d')}}" readonly name="fecha_factura"  required class="form-control" placeholder="Ingrese fecha de la factura">
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
                            <input type="text" value="{{old('valor_total')}}" name="valor_total" required class="form-control" placeholder="Ingrese el valor total de la compra">
                            @if ($errors->has('valor_total'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('valor_total') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('producto_id') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Seleccione un Producto</label>
                            <select name="producto_id" class="form-control">
                                @foreach($productos as $producto)
                                    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('producto_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('producto_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Crear factura</button>
                        <a href="{{route('facturas.index')}}" class="btn btn-danger">Volver Atrás</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Formulario-->
@endsection
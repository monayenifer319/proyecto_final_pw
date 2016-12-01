@extends('layouts.plantilla')
@section('titulo', 'Crear compra')
@section('contenido')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        compras <small>Crear compras</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="{{url('/')}}"> Dashboard</a>
                        </li>
                        <li>
                            <i class="fa fa-users"></i><a href="{{route('compras.index')}}"> compras</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-plus-square"></i> Crear compras
                        </li>
                    </ol>
                </div>
            </div>
        @include('partials.errores')
        @include('partials.mensajes')
        <!-- Formulario -->
            <div class="col-md-8 col-md-offset-2">
                <form action="{{route('compras.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('fecha_registro') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Fecha registro</label>
                            <input type="text" value="{{date('Y-m-d')}}" readonly name="fecha_registro"  required class="form-control" placeholder="Ingrese fecha registro">
                            @if ($errors->has('fecha_registro'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_registro') }}</strong>
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
                    <div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Valor</label>
                            <input type="text" value="{{old('valor')}}" name="valor" required class="form-control" placeholder="Ingrese el valor">
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
                            <input type="text" value="{{old('cantidad')}}" name="cantidad" class="form-control" required placeholder="Ingrese cantidad">
                            @if ($errors->has('cantidad'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cantidad') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Crear compra</button>
                        <a href="{{route('compras.index')}}" class="btn btn-danger">Volver Atrás</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Formulario-->
@endsection
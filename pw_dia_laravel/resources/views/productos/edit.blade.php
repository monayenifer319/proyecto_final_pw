@extends('layouts.plantilla')
@section('titulo', 'Editar producto')
@section('contenido')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        productos <small>Editar producto</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="{{url('/')}}"> Dashboard</a>
                        </li>
                        <li>
                            <i class="fa fa-users"></i><a href="{{route('productos.index')}}"> productos</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-plus-square"></i> Editar producto
                        </li>
                    </ol>
                </div>
            </div>
        @include('partials.errores')
        @include('partials.mensajes')
        <!-- Formulario -->
            <div class="col-md-8 col-md-offset-2">
                <form action="{{route('productos.update', $producto->id)}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" value="{{$producto->nombre}}" name="nombre" required class="form-control" placeholder="Ingrese Nombre">
                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Descripcion</label>
                            <input type="text" value="{{$producto->descripcion}}" name="descripcion" required class="form-control" placeholder="Ingrese descripcion">
                            @if ($errors->has('descripcion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('descripcion') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Precio</label>
                            <input type="text" value="{{$producto->precio}}" name="precio" class="form-control" required placeholder="Ingrese precio">
                            @if ($errors->has('precio'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('precio') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label>Fecha registro </label>
                            <input type="text" value="{{$producto->fecha_registro}}" name="fecha_registro" class="form-control" required placeholder="Ingrese fecha de registro">
                            @if ($errors->has('fecha_registro'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_registro') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
            </div>
            <div class="form-group{{ $errors->has('cantidad') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Cantidad </label>
                    <input type="number" value="{{$producto->cantidad}}" name="cantidad" class="form-control" required placeholder="Ingrese cantidad">
                    @if ($errors->has('cantidad'))
                        <span class="help-block">
                                    <strong>{{ $errors->first('cantidad') }}</strong>
                                </span>
                    @endif
                </div>
            </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Editar producto</button>
                        <a href="{{route('productos.index')}}" class="btn btn-danger">Volver Atrás</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Formulario-->
@endsection
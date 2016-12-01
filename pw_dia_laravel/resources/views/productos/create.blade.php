@extends('layouts.plantilla')
@section('titulo', 'Crear producto')
@section('contenido')
    <h1 class="text-center">Crear Producto</h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Inicio</a></li>
        <li><a href="{{route('productos.index')}}">Usuarios</a></li>
        <li class="active">Crear productos</li>
    </ol>
    <!-- Formulario -->
    <div class="col-md-8 col-md-offset-2">
        <form action="{{route('productos.store')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" value="{{old('nombre')}}" name="nombre" required class="form-control" placeholder="Ingrese Nombre del producto">
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
                    <input type="text" value="{{old('descripcion')}}" name="descripcion" required class="form-control" placeholder="Ingrese descripcion del producto">
                    @if ($errors->has('descripcion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>precio</label>
                    <input type="text" value="{{old('precio')}}" name="precio" class="form-control" required placeholder="Ingrese el precio">
                    @if ($errors->has('precio'))
                        <span class="help-block">
                            <strong>{{ $errors->first('precio') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('fecha_registro') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>Fecha registro</label>
                    <input type="text" value="{{old('fecha_registro')}}" name="fecha_registro" class="form-control" required placeholder="ingrese la fecha de registro">
                    @if ($errors->has('fecha_registro'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fecha_registro') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('cantidad') ? ' has-error' : '' }}">
                <div class="form-group">
                    <label>cantidad</label>
                    <input type="number" value="{{old('cantidad')}}" name="cantidad" class="form-control" required placeholder="Ingrese la cantidad">
                    @if ($errors->has('cantidad'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cantidad') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Crear Producto</button>
                <a href="{{route('productos.index')}}" class="btn btn-danger">Volver Atrás</a>
            </div>
        </form>
    </div>
    <!-- Fin Formulario-->
@endsection
@extends('layouts.plantilla')
@section('titulo', 'Index productos')
@section('contenido')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        producto <small>Listado de productos</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="{{url('/')}}"> Dashboard </a>
                        </li>
                        <li class="active">
                            <i class="fa fa-users"></i> productos
                        </li>
                    </ol>
                </div>
            </div>
            @include('partials.errores')
            @include('partials.mensajes')
            <div class="col-md-10 col-md-offset-1">
                <a href="{{route('productos.create')}}" class="btn btn-success"><i class="fa fa-user" aria-hidden="true"></i> Crear producto</a>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <!-- Datatables -->
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>precio</th>
                        <th>Fecha resgistro</th>
                        <th>cantidad</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>precio</th>
                        <th>Fecha resgistro</th>
                        <th>coantidad</th>
                        <th>Opciones</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($productos as $producto)
                        <tr>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->fecha_registro}}</td>
                            <td>{{$producto->cantidad}}</td>
                            <td>
                                <a href="{{route('productos.show', $producto->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Ver"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                <a href="{{route('productos.edit', $producto->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="{{url('productos/eliminar', $producto->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Eliminar" onclick="return confirm('Estas seguro de eliminar el usuario')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- fin Datatables -->
            </div>
        </div>
    </div>
@section('scripts')
    @include('scripts.datatable_tooltip')
@endsection
@endsection

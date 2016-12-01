@extends('layouts.plantilla')
@section('titulo', 'Index compras')
@section('contenido')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        compra <small>Listado de compras</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="{{url('/')}}"> Dashboard </a>
                        </li>
                        <li class="active">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i> compras
                        </li>
                    </ol>
                </div>
            </div>
            @include('partials.errores')
            @include('partials.mensajes')
            <div class="col-md-10 col-md-offset-1">
                <a href="{{route('compras.create')}}" class="btn btn-success"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Crear compra</a>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <!-- Datatables -->
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>fecha_registro</th>
                        <th>valor</th>
                        <th>cantidad</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>fecha_registro</th>
                        <th>valor</th>
                        <th>cantidad</th>
                        <th>Opciones</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($compras as $compra)
                        <tr>
                            <td>{{$compra->fecha_registro}}</td>
                            <td>{{$compra->valor}}</td>
                            <td>{{$compra->cantidad}}</td>
                            <td>
                                <a href="{{route('compras.show', $compra->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Ver"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                <a href="{{route('compras.edit', $compra->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="{{url('compras/eliminar', $compra->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Eliminar" onclick="return confirm('Estas seguro de eliminar la compra')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

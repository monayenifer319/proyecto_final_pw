@extends('layouts.plantilla')
@section('titulo', 'Index facturas')
@section('contenido')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        factura <small>Listado de facturas</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="{{url('/')}}"> Dashboard </a>
                        </li>
                        <li class="active">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i> facturas
                        </li>
                    </ol>
                </div>
            </div>
            @include('partials.errores')
            @include('partials.mensajes')
            <div class="col-md-10 col-md-offset-1">
                <a href="{{route('facturas.create')}}" class="btn btn-success"><i class="fa fa-check-square-o" aria-hidden="true"></i> Crear factura</a>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <!-- Datatables -->
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>fecha factura</th>
                        <th>Valor total</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Fecha factura</th>
                        <th>Valor factura</th>
                        <th>Opciones</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($facturas as $factura)
                        <tr>
                            <td>{{$factura->fecha_factura}}</td>
                            <td>{{$factura->valor_total}}</td>
                            <td>
                                <a href="{{route('facturas.show', $factura->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Ver"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                <a href="{{route('facturas.edit', $factura->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="{{url('facturas/eliminar', $factura->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Eliminar" onclick="return confirm('Estas seguro de eliminar la factura')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

@extends('layouts.plantilla')
@section('titulo', 'Index informes')
@section('contenido')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        informe <small>Listado de informes</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="{{url('/')}}"> Dashboard </a>
                        </li>
                        <li class="active">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i> informes
                        </li>
                    </ol>
                </div>
            </div>
            @include('partials.errores')
            @include('partials.mensajes')
            <div class="col-md-10 col-md-offset-1">
                <a href="{{route('informes.create')}}" class="btn btn-success"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Crear informe</a>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <!-- Datatables -->
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>fecha_inicio</th>
                        <th>fecha_finalizacion</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>fecha_inicio</th>
                        <th>fecha_finalizacion</th>
                        <th>Opciones</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($informes as $informe)
                        <tr>
                            <td>{{$informe->fecha_inicio}}</td>
                            <td>{{$informe->fecha_finalizacion}}</td>
                            <td>
                                <a href="{{route('informes.show', $informe->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Ver"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                <a href="{{route('informes.edit', $informe->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="{{url('informes/eliminar', $informe->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Eliminar" onclick="return confirm('Estas seguro de eliminar el informe')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

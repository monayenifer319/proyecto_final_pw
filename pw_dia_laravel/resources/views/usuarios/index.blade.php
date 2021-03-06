@extends('layouts.plantilla')
@section('titulo', 'Index Usuarios')
@section('contenido')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Usuarios <small>Listado de Usuarios</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i><a href="{{url('/')}}"> Dashboard </a>
                        </li>
                        <li class="active">
                            <i class="fa fa-users"></i> Usuarios
                        </li>
                    </ol>
                </div>
            </div>
            @include('partials.errores')
            @include('partials.mensajes')
            <div class="col-md-10 col-md-offset-1">
                <a href="{{route('usuarios.create')}}" class="btn btn-success"><i class="fa fa-user" aria-hidden="true"></i> Crear Usuario</a>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <!-- Datatables -->
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Opciones</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->nombre}}</td>
                            <td>{{$usuario->apellido}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>
                                <a href="{{route('usuarios.show', $usuario->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Ver"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                <a href="{{route('usuarios.edit', $usuario->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="{{url('usuarios/eliminar', $usuario->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Eliminar" onclick="return confirm('Estas seguro de eliminar el usuario')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

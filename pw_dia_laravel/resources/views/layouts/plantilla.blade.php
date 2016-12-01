<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda en Línea - @yield('titulo')</title>
    <!-- Incluir CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/sb-admin.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap.min.css')}}">
    <!-- Fin CSS -->
</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">Tienda en Linea</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->nombre}} {{Auth::user()->apellido}} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Cambiar Contraseña</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{url('logout')}}"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="{{url('/')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{route('usuarios.index')}}"><i class="fa fa-fw fa-users"></i> Usuarios</a>
                </li>
                <li>
                    <a href="{{route('productos.index')}}"><i class="fa fa-product-hunt" aria-hidden="true"></i> Productos</a>
                </li>
                <li>
                    <a href="{{route('compras.index')}}"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Compras</a>
                </li>
                <li>
                    <a href="{{route('facturas.index')}}"><i class="fa fa-check-square-o" aria-hidden="true"></i> Facturas</a>
                </li>
                <li>
                    <a href="{{route('informes.index')}}"><i class="fa fa-file-archive-o" aria-hidden="true"></i> Informes</a>
                </li>
                <li>
                    <a href="{{url('logout')}}"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                </li>
                <!--<li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li>
                            <a href="#">Dropdown Item</a>
                        </li>
                        <li>
                            <a href="#">Dropdown Item</a>
                        </li>
                    </ul>
                </li>-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <!-- Contenido Página -->
    <!-- Fin Menu -->
    @yield('contenido')
    </div>
    <!-- Incluir JS -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.bootstrap.min.js')}}"></script>
    <!-- Fin JS -->
    @yield('scripts')
</body>
</html>
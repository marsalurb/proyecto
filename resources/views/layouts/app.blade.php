<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Optica') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div style="background-color:#fff2f1" >
    <div style=" font-family: 'Courier New'">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Optica') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Registrar empleado</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->firstname }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('items.index') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('item-form').submit();">
                                        Productos
                                    </a>
                                    <form id="item-form" action="{{ route('items.index') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="{{ route('sales.index') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('sale-form').submit();">
                                        Ventas
                                    </a>
                                    <form id="sale-form" action="{{ route('sales.index') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="{{ route('purchasers.index') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('purchaser-form').submit();">
                                        Clientes
                                    </a>
                                    <form id="purchaser-form" action="{{ route('purchasers.index') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="{{ route('employers.index') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('employer-form').submit();">
                                        Empleados
                                    </a>
                                    <form id="employer-form" action="{{ route('employers.index') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="{{ route('suppliers.index') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('supplier-form').submit();">
                                        Proveedores
                                    </a>
                                    <form id="supplier-form" action="{{ route('suppliers.index') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar sesión
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

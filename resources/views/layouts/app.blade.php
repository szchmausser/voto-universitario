<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--VIOSCAR-->
    <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/jszip-3.1.3/dt-1.10.15/b-1.3.1/b-html5-1.3.1/b-print-1.3.1/datatables.min.css"/>-->
    <link href="{{ asset('datatables/DataTables-1.10.15/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('datatables/Buttons-1.3.1/css/buttons.dataTables.min.css') }}" rel="stylesheet">

    <style type="text/css" media="screen">
    /* Hacer un area de la pagina deslizable */
    /* https://stackoverflow.com/questions/1193414/scrolling-a-div-with-jquery */
      .encabezado{
        margin: 10px;
      }
      #boton{
        margin-top: 10px;
        margin-bottom: 10px;
        width: 100%;
      }
      .scrollable{
        width: 90%px;
        height: 90%px;
        overflow-x: scroll;
      }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Inicio de sesión</a></li>
                            <li><a href="{{ route('register') }}">Crear una cuenta</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!--VIOSCAR-->
    <!--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-2.2.4/jszip-3.1.3/dt-1.10.15/b-1.3.1/b-html5-1.3.1/b-print-1.3.1/datatables.min.js"></script>-->
    <script src="{{ asset('datatables/jQuery-2.2.4/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('datatables/DataTables-1.10.15/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('datatables/Buttons-1.3.1/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('datatables/Buttons-1.3.1/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('datatables/Buttons-1.3.1/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/jszip.min.js') }}"></script>
</body>
</html>
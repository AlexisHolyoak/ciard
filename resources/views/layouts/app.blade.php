<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @include('layouts.styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'C.I.A.R.D') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ Request::segment('1')=='home' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        @if(Auth::user()->hasRole(['administrador','superadministrador']))
                        <li class="nav-item {{ Request::segment('1')=='administration' ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('admin.index')}}">Administración</a>
                        </li>
                        <li class="nav-item {{ Request::segment('1')=='disasters' ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('disasters.index')}}">Desastres</a>
                        </li>
                        <li class="nav-item {{ Request::segment('1')=='infrastructure' ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('infrastructure.index')}}">Infraestructuras</a>
                        </li>
                        @endif
                        @if(Auth::user()->hasRole(['evaluador']))
                        <li class="nav-item dropdown {{ Request::segment('1')=='forms' ? 'active' : '' }}">
                            <a class="nav-link  dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Formularios </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('forms.pre.index')}}">Pre catastrofe</a>
                                <a class="dropdown-item" href="#">Post catastrofe</a>
                            </div>
                        </li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->person->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        @include('layouts.notifications')
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @include('layouts.scripts')
</body>
</html>

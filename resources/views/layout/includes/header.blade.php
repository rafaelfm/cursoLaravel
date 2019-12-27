<!DOCTYPE html>
<html>
<head>
    <title> @yield('titulo')</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper deep-orange">
            <a href="#!" class="brand-logo">Curso de Laravel</a>
            <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                @if(Auth::guest())
                    <li><a href="{{route('site.login')}}">Login</a></li>
                @else
                    <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                    <li><a href="#">{{Auth::user()->name}}</a></li>
                    <li><a href="{{route('site.sair')}}">Sair</a></li>
                @endif

            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile">
        <li><a href="/">Home</a></li>
        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
    </ul>
</header>

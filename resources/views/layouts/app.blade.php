<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('styles')
    <title>@yield('title')</title>
</head>
<style>
    * {
        margin: 0;
        padding:0;
        box-sizing: border-box
    }
     /* Estilos para a barra de navegação */
     .navbar {
            background-color: #333; /* Cor de fundo da barra de navegação */
            display: flex;
            justify-content: space-around;
            align-items: center
        }

        /* Estilos para os links à direita */
        .navbar a {
            color: white; /* Cor do texto */
            padding: 14px 16px; /* Espaçamento interno (acima/abaixo e à esquerda/direita) */
            text-decoration: none; /* Remover sublinhado padrão dos links */
        }

        /* Estilo para os links quando o cursor passa sobre eles */
        .navbar a:hover {
            background-color: #ddd; /* Cor de fundo quando o cursor passa sobre o link */
            color: black; /* Cor do texto quando o cursor passa sobre o link */
        }
</style>
<body>
    @if (Route::has('login'))
                <div class="navbar">
                    <a class="logo" href="{{route('home')}}">Logo</a>
                    <div class="navbar-links">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                            <a href="{{ url('/logout') }}" class="">Logout</a>
                        @else
                            <a href="{{ route('login') }}" class="">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="">Register</a>
                            @endif
                        @endauth
                    </div>
                </div>
            @endif
    @yield('content')
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laravel')</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
       
<!-- CSS Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- CSS -->
 <link rel="stylesheet" type="text/css" href="/css/styles.css">
       
<!-- JS -->
<script type="text/javascript" src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" alt="HDC Events"></a>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/" class="nav-link">Eventos</a>
                                </li>   
                                <li class="nav-item">
                                    <a href="/events/create" class="nav-link">Criar Eventos</a>
                                </li>
                                @auth
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link">Meus eventos</a>
                                </li>
                                <li class="nav-item">
                                    <form action="/logout" method="POST">
                                        @csrf
                                    <a href="/logout"
                                    class="nav-link"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    Sair
                                    </a>
                                    </form>
                                </li>
                                @endauth

                                @guest
                                <li class="nav-item">
                                    <a href="/login" class="nav-link">Entrar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/register" class="nav-link">Cadastrar</a>
                                </li>
                                @endguest
                            </ul>
                </div>
            </nav>
        </header>
            <main>
                <div class="container-fluid">
                    <div class="row">
                        @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                        @endif
                        @yield('content')
                    </div>
                </div>
            </main>
            
        <footer>
                <p>HDC Events &copy; 2021</p>
            </footer>

            <script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>
    </body>
</html>

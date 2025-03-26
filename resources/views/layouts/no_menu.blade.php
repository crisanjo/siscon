<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="robots" content="index,follow,noodp" />

        <title>@yield('title')</title>

        <meta name="theme-color" content="#0c3355">
        <meta name="apple-mobile-web-app-status-bar-style" content="#0c3355">
        <meta name="msapplication-navbutton-color" content="#0c3355">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
         @vite(['resources/sass/app.scss', 'resources/css/login.css', 'resources/js/app.js', 'resources/js/bootstrap.js'])
         <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
         <script defer="defer" src="//barra.brasil.gov.br/barra_2.0.js" type="text/javascript"></script>
    </head>
    <body class="gradiente">
        <div class="linha">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <img src="{{ asset('img/logo-sai.png') }}" alt="Logo do sistema" style="margin:auto;max-height:30px;height:auto;display:block;padding-right:10px" />
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <li class="nav-link">
                                <strong>Sistema de Avaliações Institucionais da Unilab</strong>
                            </li>
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="<?= url('/') ?>" title="Ir para à página inicial" class="text-decoration-none" style="float:right">Sair</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="main">
                <div class="col-lg-9">
                    <div class="topo">
                        <div id="container_alerta">
                            @if(session('msg'))
                                <p class="msg">{{ session('msg') }}</p>
                            @endif
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

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
          <link href="{{ asset('css/app.css')}}" rel="stylesheet" />
          <link href="{{ asset('css/login.css')}}""{{ asset('js/app.js')}}" rel="stylesheet" />
          <script src="{{ asset('js/app.js')}}"></script> 
          <script src="{{ asset('js/bootstrap.js')}}"></script>
         <script src="{{ asset('js/bootstrap.js')}}"></script>
         <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    </head>
    <body>
        <div class="linha">
            <div class="sidenav">

                <div class="login-main-text">
                    <!-- Sidebar - Brand -->
                <div class="sidebar-brand d-flex align-items-center justify-content-center shadow" style="background:#0C3355;">
                    <div class="sidebar-brand-text">
                        <img src="{{ asset('img/logo-sai-clara.png') }}" alt="Logo do sistema" id="logo" height="50px" width="100px"/>
                    </div>
                </div>
                    <h2 class="text-center">
                        <a href="<?= url('/') ?>" title="Ir para à página inicial" class="text-decoration-none text-light">Sistema de Avaliações Institucionais</a>
                    </h2>
                    <p>
                        Seja bem-vindo(a), desde já, a <strong>Unilab</strong> gostaria de agradecer a você, usuário, por dedicar alguns minutos para responder esta avaliação, que é de suma importância para o desenvolvimento da instituição.
                    </p>
                    
                </div>
            </div>
            <div class="main">
                <div class="col-lg-9">
                    <div class="login-form">
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

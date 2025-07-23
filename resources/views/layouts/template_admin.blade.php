<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Siscon</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" />


    <!-- Custom styles for this page -->
    <link href="{{ asset('datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet">

    <!-- jsPanel CSS -->
    <link href="https://cdn.jsdelivr.net/npm/jspanel4@4.15.0/dist/jspanel.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center shadow" style="background:#0C3355">
                <div class="sidebar-brand-text">
                    <img src="{{ asset('img/logo-sai-clara.png') }}" alt="Logo do sistema" id="logo" />
                </div>
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item mt-2">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Avaliações</span>
                </a>
               
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Gerenciar</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('profiles.index')}}">Perfil</a>
                        <a class="collapse-item" href="{{ route('apartments.index')}}">Apartametos</a>
                        <a class="collapse-item" href="{{ route('services.index')}}">Serviços</a> 
                        <a class="collapse-item" href="{{ route('areas.index')}}">Areas</a>
                        <a class="collapse-item" href="{{ route('statuses.index')}}">Status</a>
                        <a class="collapse-item" href="{{ route('feedbacks.index')}}">Feedback</a>
                        <a class="collapse-item" href="{{ route('providers.index')}}">Provedores</a>
                        <a class="collapse-item" href="{{ route('types.index')}}">Tipos</a>
                        <a class="collapse-item" href="{{ route('contracts.index')}}">Contratos</a>
                        <a class="collapse-item" href="{{ route('users.index')}}">Usuários</a>
                        <a class="collapse-item" href="{{ route('protocols.index')}}">Protocolos</a>
                        <a class="collapse-item" href="{{ route('readjustments.index')}}">Reajustes</a>
                        <a class="collapse-item" href="{{ route('visits.index')}}">Visitas</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Relatório</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content" class="pb-3">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background: #0C3355">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 ml-2">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Dudu</span>
                                <!--<img class="img-profile rounded-circle"
                                    src="{{ asset('img/undraw_profile.svg') }} ">-->
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!--<a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>-->
                                <a class="dropdown-item" href=""
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>    {{ __('Sair') }}
                                  </a>

                                  <form id="logout-form" action="" method="POST" class="d-none">
                                      @csrf
                                  </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="container mt-3">
                        <h2 class="titulo float-left">@yield('title')</h2>
                    </div>
                  @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer p-3">
                <div id="versao" class="seis-colunas">
                    <abbr title="Sistema de Avaliações Institucionais">SISCON</abbr>
                </div>
                <div id="creditos" class="seis-colunas">
                    Desenvolvido por
                    <abbr title="Seção de Portais e Aplicações Web">Eduardo</abbr>
                    /
                    <abbr title="Divisão de Sistemas da Informação">Helida</abbr>
                    /
                    <a href="http://dti.unilab.edu.br/DTI" target="_blank"><abbr title="Diretoria de Tecnologia da Informação">Cristiano</abbr></a>
                    /
                    <a href="http://www.unilab.edu.br/" target="_blank"><abbr title="Universidade da Integração Internacional da Lusofonia Afro-Brasileira"></abbr></a>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

     <!-- datatables -->
    <script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('datatables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>


     <!-- Page level custom scripts -->
     <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

     <!-- jsPanel JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/jspanel4@4.15.0/dist/jspanel.js"></script>

    <!-- Inicialização do JSPANEL -->
    <script src="{{ asset('js/jspanel_inicialize.js') }}"></script>

    <script src="{{ asset('js/sai.js') }}"></script>

</body>
</html>

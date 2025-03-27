<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SAI-Sistema de Avaliação Institucional</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/app.css')}}" rel="stylesheet" />
    <script src="{{ asset('js/app.js')}}"></script> 
    <style>
        .container{
            max-width:100%;
        }
        .jsPanel-content{
            background:#f5f5f5!important;
        }
        .card-header{
            margin-top:10px;
            background-color:#FFF!important;
            font-weight: bold;
            font-size: 1.25em;
        }
        .required:after {
            content:" *";
            color: red;
        }
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="container mt-3">
                    <h2 class="titulo float-left">@yield('title')</h2>
                </div>
                  @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
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

     <!-- Core plugin Mask Input-->
     <script src="{{ asset('js/jquery/jquery.mask.min.js') }}"></script>
     <script src="{{ asset('js/mask.js') }}"></script>

    <script src="{{ asset('js/sai.js') }}"></script>

</body>
</html>

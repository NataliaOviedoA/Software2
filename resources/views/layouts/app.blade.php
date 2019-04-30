<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>Tweets Analyzer | @yield("name")</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css')}}"/>

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('styles/pe-icons/pe-icon-7-stroke.css')}}"/>
    <link rel="stylesheet" href="{{ asset('styles/pe-icons/helper.css')}}"/>
    <link rel="stylesheet" href="{{ asset('styles/stroke-icons/style.css')}}"/>
    <link rel="stylesheet" href="{{ asset('styles/style.css')}}">
</head>
<body>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    <nav class="navbar navbar-expand-md navbar-default fixed-top">
        <div class="navbar-header">
            <div id="mobile-menu">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
            </div>
            <a class="navbar-brand" href="{{ route("dashboard") }}">
                Tweets
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="left-nav-toggle">
                <a href="#">
                    <i class="stroke-hamburgermenu"></i>
                </a>
            </div>
            <form class="navbar-form mr-auto">
                <input type="text" class="form-control" placeholder="Búsqueda..." style="width: 175px">
            </form>
        </div>
    </nav>
    <!-- End header-->

    <!-- Navigation-->
    <aside class="navigation">
        <nav>
            <ul class="nav luna-nav">
                <li class="nav-category">
                    Menú
                </li>
                <li>
                    <a href="{{ route('dashboard')  }}">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('analyze') }}">Analizar</a>
                </li>

                <li>
                    <a href="{{ route('terms') }}">
                        Términos y condiciones
                    </a>
                </li>
                <li>
                    <a href="{{ route('privacy') }}">
                        Politicas de privacidad
                    </a>
                </li>
                <li class="nav-info">
                    <i class="fa fa-twitter text-accent"></i>
                    {{--<i class="pe pe-7s-shield text-accent"></i>--}}

                    <div class="m-t-xs">
                        <span class="c-white">Tweets Analyzer</span> <br> Aplicación web para el análisis de Tweets mediante Personality Insights de Watson.
                    </div>
                </li>
            </ul>
        </nav>
    </aside>
    <!-- End navigation-->


    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">

            @yield('content')

        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="{{ asset('vendor/pacejs/pace.min.js')}}"></script>
<script src="{{ asset('vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('vendor/toastr/toastr.min.js')}}"></script>
<script src="{{ asset('vendor/sparkline/index.js')}}"></script>
<script src="{{ asset('vendor/flot/jquery.flot.min.js')}}"></script>
<script src="{{ asset('vendor/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{ asset('vendor/flot/jquery.flot.spline.js')}}"></script>

<!-- App scripts -->
<script src="{{ asset('scripts/luna.js')}}"></script>

@yield('onready')

</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="ML">
        <title>LoLTfT - @yield('title')</title>
        <link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet">
        @yield('custom-css')
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- Menu. -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-darkblue">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="brand" src="/images/loltft.png" alt="Logo" />
                    LoLTfT
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbars" class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ Request::route()->getName() == 'champions.index' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('champions.index') }}">Champions</a>
                        </li>
                        <li class="nav-item {{ Request::route()->getName() == 'items.index' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('items.index') }}">Objets</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown07">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content. -->
        <div class="nav-wrapper container">

            <div class="row">
                <div class="col-xs-12 dashboard-header">
                    <h1 class="dash-title">@yield('pageTitle')</h1>
                    <p class="text-muted">@yield('pageSubTitle')</p>
                </div>
            </div>

            @yield('content')

            <div class="row">
                <footer>
                    <div id="credits">

                    </div>
                </footer>
            </div>
        </div>

        <script type="text/javascript" src="{{ URL::asset('/js/jquery-3.4.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
        @yield('custom-js')
    </body>
</html>

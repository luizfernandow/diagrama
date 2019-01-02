<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="RunWeb">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@lang('app.application_name')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <link href="{!! mix('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    </head>

    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        @include('layouts.header')
        <div class="app-body">
            @include('layouts.sidebar')
            <main class="main">
                <!-- Breadcrumb-->
                @yield('breadcrumbs')
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
        <footer class="app-footer">
            <div>
                <a href="#">Diagrama XML</a>
                <span>&copy; 2018 Diagrama XML.</span>
            </div>
            <div class="ml-auto">
                <span>Powered by</span>
                <a href="http://asfl.com.br/">ASFL</a>
            </div>
        </footer>
        <script type="text/javascript" src="{!! mix('js/app.js') !!}"></script>
        @yield('javascript')
    </body>
</html>

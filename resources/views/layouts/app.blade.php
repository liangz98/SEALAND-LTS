<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'SeaLand') - {{ setting('site_name', 'SeaLand官网') }}</title>
    <meta name="description" content="@yield('description', setting('seo_description', 'SeaLand官网。'))" />
    <meta name="keyword" content="@yield('keyword', setting('seo_keyword', 'SeaLand官网'))" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="css/revolution/css/settings.css" rel="stylesheet">
    <link href="css/revolution/css/layers.css" rel="stylesheet">
    <link href="css/revolution/css/navigation.css" rel="stylesheet">
    <link href="css/animate-css/animate.css" rel="stylesheet">

    <!-- Head -->
    <link href="/css/_root_head.css" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div id="app" class="{{ route_class() }}-page">

        @include('layouts._header')

        <div class="container">
            @include('layouts._message')
        </div>

        <div>
            @yield('content')
        </div>

        @include('layouts._footer')
    </div>

    @if (app()->isLocal())
        @include('sudosu::user-selector')
    @endif

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Rev slider js -->
    <script src="js/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

    <!-- Head js -->
    <script src="js/_root_head.js"></script>
    @yield('scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    @include('cpg.analytics')

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/img/favicon.ico') }}" type="image/x-icon">
    <title> @yield('title', 'Clickpassgoal - Transformamos jovenes futbolistas en jugadores profesionales.')  </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home-pack.css') }}" rel="stylesheet">
</head>
<body>
@yield('content')
<!-- Footer -->
@unless(isset($noFooter))
    @include('landing-partials.footer')
@endunless
</body>
</html>
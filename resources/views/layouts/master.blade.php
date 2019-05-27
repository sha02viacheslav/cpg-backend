<!DOCTYPE html>
<html lang="es">
<head>
    @include('cpg.metasBack')

    <title> @yield('title', 'Clickpassgoal - Dashboard')  </title>

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Montserrat:200,300,400,500, 600|Raleway:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>
<div class="wrapper">
    <!-- Video BG -->
    <video id="video" class="video" muted="muted" loop="loop" autoplay="autoplay">
        <source src="/video/stars.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="wrapper">
        <!-- Left Navigation -->
        @include('partials/navigation')
        <div class="main-panel">
            <!-- Top Navigation -->
            @include('partials/header')

            <!-- Main Content -->
            <div class="content">
                <div class="container-fluid">
                    <!-- Notifications -->
                    @include('partials.notifications')

                    <!-- Content -->
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
@stack('scripts')

</body>
</html>

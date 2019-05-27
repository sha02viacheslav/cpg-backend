<!DOCTYPE html>
<html lang="es">
<head>
    @include('cpg.analytics')
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/img/favicon.ico') }}" type="image/x-icon">

    <title> @yield('title', 'Clickpassgoal - Transformamos jovenes futbolistas en jugadores profesionales.')  </title>

    {{--<link type="text/css" href="https://fonts.googleapis.com/css?family=Muli:400,300|Montserrat" rel="stylesheet">--}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/packages.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customPaper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightForm.css') }}" rel="stylesheet">

    @stack('styles')

</head>

<body>
<div class="wrapper">
    @include('partials/navigation')
    <div class="main-panel">
        @include('partials/header')
        <div class="content customFirstContainer">
            <div class="container-fluid">
                <div class="dashNotWrapper" id="notificationsBox">
                    <div class="col-lg-12 alertBox">
                        <div class="row ">
                            @unless(isset($noNotifications))
                                @include('partials.notifications')
                            @endif
                        </div>
                    </div>
                </div>
                @yield('content')
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

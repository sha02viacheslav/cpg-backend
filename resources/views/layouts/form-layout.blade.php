<!DOCTYPE html>
<html lang="es">
<head>
    @include('cpg.analytics')
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/img/favicon.ico') }}" type="image/x-icon">
    <title> @yield('title', 'Clickpassgoal - Transformamos jovenes futbolistas en jugadores profesionales.')  </title>
    @include('cpg.metas')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form-pack.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landingStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/querys.css') }}" rel="stylesheet">
    @stack('styles')
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
</head>
<body>

@yield('content')

<!-- JavaScripts -->
<script src="{{ asset('js/form-pack.js') }}"></script>

@stack('scripts')
<!-- Start of Async Drift Code -->
<script>
    !function() {
        var t;
        if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
                t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
                t.factory = function(e) {
                    return function() {
                        var n;
                        return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
                    };
                }, t.methods.forEach(function(e) {
            t[e] = t.factory(e);
        }), t.load = function(t) {
            var e, n, o, i;
            e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
                    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
                    n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
        });
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('physkhextxs4');
</script>
</body>

</html>

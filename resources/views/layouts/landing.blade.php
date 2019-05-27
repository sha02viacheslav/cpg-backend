<!DOCTYPE html>
<html lang="es">
<head>
    @if(env('production'))
      @include('cpg.analytics')
      @include('cpg.fbPixel')
    @endif


    {{--@pwaManifest--}}
    @pwaManifest

    <!-- Metas -->
    <title> @yield('title', config('seo.title') )  </title>
    @include('cpg.metas')
    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/home-pack.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <!-- Mobil Nav -->
    @include('landing-partials.mobil-nav')

    @yield('content')

    <!-- Footer -->
    @unless(isset($noFooter))
        @include('landing-partials.footer')
    @endunless

    <!-- JavaScripts -->
    <script src="{{ asset('js/home-pack.js') }}"></script>
    @stack('scripts')
    @unless(isset($noChat))
        @include('cpg.drift')
    @endunless
</body>
</html>


<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
{{-- Icon--}}
<link rel="icon" href="{{ asset('/img/favicon.png') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}" type="image/x-icon">
<meta name="description" content="@yield('description', config('seo.description'))">
<meta property="og:site_name" content="Click Pass Goal">
<meta property="og:title" content="@yield('title', config('seo.title') )">
<meta property="og:type" content="website">
<meta property="og:description" content="@yield('description', config('seo.description'))">
<meta property="og:image" content="{{ url('/img/sitebg.png') }}">
<meta property="og:image:width" content="119">
<meta property="og:image:height" content="58" >
<meta property="og:url" content="https://www.clickpassgoal.com">
<meta name="keywords" content="Foobbal, Buenos Aires, Argentina, managers, sueño, profesional, jugador, delanteros, soccer">
{{-- Twitter--}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@clickpgok">
<meta name="twitter:creator" content="@clickpgok">
<meta name="twitter:title" content="Contactanos">
<meta name="twitter:description" content="@yield('description', config('seo.description'))">
<meta name="twitter:image" content="{{ url('/img/favicon/apple-icon.png') }}">
{{--Apple Icons--}}
<link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
<!-- Fallback application metadata for legacy browsers -->
<meta name="application-name" content="Click Pass Goal">
{{-- PWA --}}
<meta name="msapplication-TileColor" content="#2196f3">
<meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#2196f3">
<link rel="manifest" href="/img/favicon/manifest.json">


<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta charset="utf-8">
{{-- Icon--}}
<link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('/img/favicon.png') }}" type="image/x-icon">
{{-- No Google--}}
<meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
<meta property="og:image" content="{{ url('/img/sitebg.png') }}">
<meta property="og:image:width" content="119">
<meta property="og:image:height" content="58" >
{{-- PWA --}}
<meta name="msapplication-TileColor" content="#37a0e6">
<meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#37a0e6">
<link rel="manifest" href="/img/favicon/manifest.json">


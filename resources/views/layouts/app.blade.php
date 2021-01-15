<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Primary Meta Tags -->
    <title>CV Alexandre De Pembroke</title>
    <meta name="title" content="CV_Alexandre_De_Pembroke">
    <meta name="description" content="Cv de presentation de Monsieur Alexandre De Pembroke">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://alexandre.depembroke.fr/">
    <meta property="og:title" content="CV_Alexandre_De_Pembroke">
    <meta property="og:description" content="Cv de presentation de Monsieur Alexandre De Pembroke">
    <meta property="og:image" content="{{asset('images/profil.jpg', true)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://alexandre.depembroke.fr/">
    <meta property="twitter:title" content="CV_Alexandre_De_Pembroke">
    <meta property="twitter:description" content="Cv de presentation de Monsieur Alexandre De Pembroke">
    <meta property="twitter:image" content="{{asset('images/profil.jpg', true)}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js', env('APP_HTTPS')) }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
          crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.1" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css', env('APP_HTTPS')) }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/favicon/apple-icon-57x57.png',env('APP_HTTPS'))}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/favicon/apple-icon-60x60.png',env('APP_HTTPS'))}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/favicon/apple-icon-72x72.png',env('APP_HTTPS'))}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/favicon/apple-icon-76x76.png',env('APP_HTTPS'))}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/favicon/apple-icon-114x114.png',env('APP_HTTPS'))}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/favicon/apple-icon-120x120.png',env('APP_HTTPS'))}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/favicon/apple-icon-144x144.png',env('APP_HTTPS'))}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/favicon/apple-icon-152x152.png',env('APP_HTTPS'))}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-icon-180x180.png',env('APP_HTTPS'))}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('images/favicon/android-icon-192x192.png',env('APP_HTTPS'))}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png',env('APP_HTTPS'))}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/favicon/favicon-96x96.png',env('APP_HTTPS'))}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png',env('APP_HTTPS'))}}">
    <link rel="manifest" href="{{asset('images/favicon/manifest.json',env('APP_HTTPS'))}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('images/favicon/ms-icon-144x144.png', env('APP_HTTPS'))}}">
    <meta name="theme-color" content="#ffffff">
    <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>
    </script>
</head>
<body>
<div id="app">
    @yield('content')
</div>
</body>
</html>

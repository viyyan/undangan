<?php
/**
 * Basic view layout
 */
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->
    <title>{{ (isset($title)) ? $title.' | ' : '' }}{{ env('APP_NAME') }}</title>
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="keywords" content="{{ env('APP_KEYWORDS') }}">
    <meta property="og:title" content="{{ (isset($title)) ? $title.' | ' : '' }}{{ env('APP_NAME') }}" />
    <meta property="og:image" content="{{ frontImages('meta-image-logo.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui, user-scalable=no">
    <link rel="icon" href="{{ frontImages('favicon.ico') }}" type="image/x-icon" sizes="16x16">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    @if (isset($cssFileName))
        <link rel="stylesheet" href="{{ frontAssets('css/'.$cssFileName.'.css', 13) }}">
    @else
        <link rel="stylesheet" href="{{ frontAssets('css/home.css') }}">
    @endif
    <script>
        var API_BASE_URL = "{{ url(env('API_PREFIX')) }}"
    </script>
  </head>
  <body class="{{ !empty($classBody) ? $classBody : '' }}">
    <div class="site">
    @include('frontend.includes.header')
      <main class="main" >
          @yield('content')
      </main>
    @include('frontend.includes.footer')
    </div>

    @include('frontend.includes.loader')
    @if (isset($jsFileName))
      <script src="{{ frontAssets('js/'.$jsFileName.'.js', 13) }}"></script>
    @else
      <script src="{{ frontAssets('js/general.js') }}"></script>
    @endif
  </body>
</html>

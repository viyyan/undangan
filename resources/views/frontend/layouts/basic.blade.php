<?php
/**
 * Basic view layout
 */
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->
    <title>Clove Home</title>
    <meta name="description" content="Clove">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui, user-scalable=no">
    <link rel="icon" href="{{ frontImages('favicon.ico') }}" type="image/x-icon" sizes="16x16">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
    @if (isset($cssFileName))
        <link rel="stylesheet" href="{{ frontAssets('css/'.$cssFileName.'.css', '6') }}">
    @else
        <link rel="stylesheet" href="{{ frontAssets('css/home.css') }}">
    @endif
    <script>
        var API_BASE_URL = "{{ url(env('API_PREFIX')) }}"
    </script>
    @if (isset($caseStudyPermalink))
        <script>
            var CASE_STUDY_PERMALINK = "{{$caseStudyPermalink}}"
        </script>
    @endif
    @if (isset($isContact))
      <script>
        var ASSETS_ROOT_URL = "{{ asset('assets/frontend/images') }}/"
      </script>
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
    @endif
  </head>
  <body class="{{ !empty($classBody) ? $classBody : '' }}">
    <div class="site">
    @include('frontend.includes.header')
      <main class="main">
          @yield('content')
      </main>
    @include('frontend.includes.footer')
    </div>

    @if (isset($isContact))
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    @endif
    @if (isset($isQuiz))
        @include('frontend.includes.quiz-result')
    @endif
    @include('frontend.includes.loader')
    @if (isset($jsFileName))
      <script src="{{ frontAssets('js/'.$jsFileName.'.js', 6) }}"></script>
    @else
      <script src="{{ frontAssets('js/general.js') }}"></script>
    @endif
  </body>
</html>

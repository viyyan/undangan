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
    <link rel="icon" href="favicon.png" type="image/x-icon" sizes="16x16">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
    @if (isset($cssName))
        <link rel="stylesheet" href="{{ frontAssets('css/'.$cssName.'.css') }}">
    @else
        <link rel="stylesheet" href="{{ frontAssets('css/home.css') }}">
    @endif
  </head>
  <body class="home">
    <div class="site">
    @include('frontend.includes.header')
      <main class="main">
          @yield('content')
      </main>
    @include('frontend.includes.footer')
    </div>
  </body>
</html>

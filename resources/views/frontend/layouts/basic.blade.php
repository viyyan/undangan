<?php
/**
 * Basic view layout
 */
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->
        <title>Taisho Indonesia</title>
        <meta name="description" content="Taisho Indonesia">
        <meta name="keywords" content="Taisho Indonesia">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui, user-scalable=no">
        <link rel="icon" href="{{ frontImage('favicon.ico') }}" type="image/x-icon" sizes="16x16">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ frontAssets('css/styles.css') }}">
        </head>
    <body class="{{ !empty($classBody) ? $classBody : '' }}">
        <div class="site">
            @include('frontend.includes.header')

            <main class="main">
                @yield('content')
            </main>

            @include('frontend.includes.footer')
        </div>
        <script src="{{ frontAssets('js/scripts.js') }}"></script>
        <script src="{{ frontAssets('js/api-scripts.js?v=2') }}"></script>
    </body>
</html>

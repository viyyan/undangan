<?php
/**
 * Basic view layout
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Weeding of Fian & Tyas</title>
    <link rel="stylesheet" href="{{ frontAssets('css/style.css') }}?v=10">
    <link rel="stylesheet" type="text/css" href="{{ frontAssets('slick/slick.css') }}?v=3">
    <link rel="stylesheet" type="text/css" href="{{ frontAssets('slick/slick-theme.css') }}?v=5">
    <link rel="stylesheet" type="text/css" href="{{ frontAssets('css/image-viewer.css') }}?v=6">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="{{ frontImages('favicon.ico') }}?v=1">
    <meta property="og:image" content="{{ frontImages('og_image.png') }}" />
</head>

<body>

    @yield('content')

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ frontAssets('slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ frontAssets('js/script.js') }}" type="text/javascript" ></script>
</body>
</html>

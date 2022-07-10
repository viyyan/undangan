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
    <title>The Wedding of Fian - Tyas</title>
    <link rel="stylesheet" href="{{ frontAssets('css/style.css') }}?v=12">
    <link rel="stylesheet" type="text/css" href="{{ frontAssets('slick/slick.css') }}?v=3">
    <link rel="stylesheet" type="text/css" href="{{ frontAssets('slick/slick-theme.css') }}?v=5">
    <link rel="stylesheet" type="text/css" href="{{ frontAssets('css/image-viewer.css') }}?v=6">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="{{ frontImages('favicon.ico') }}?v=1">
    <meta property="og:image" content="{{ frontImages('og_image_new.png') }}?v=2" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1000" />
    <meta property="og:image:height" content="525" />
    <meta property="og:description" content="Semoga doa restu dan cinta yang Bapak/Ibu/Saudara/i sekalian kirimkan, dapat menjadi keberkahan dan kekuatan besar bagi kami dalam mengarungi kehidupan baru." />
</head>

<body>

    @yield('content')

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ frontAssets('slick/slick.js') }}?v=3" type="text/javascript" charset="utf-8"></script>
    <script src="{{ frontAssets('js/script.js') }}?v=3" type="text/javascript" ></script>
</body>
</html>

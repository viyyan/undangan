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
    <style>
      #content {
        width: 800px;
        margin: auto;
        height: 100%;
        display: flex;
        align-items: center;
      }
      #frame {
        position:fixed;
        top:0;
        left:0;
        bottom:0;
        right:0;
        width:100%;
        height:100%;
        border:none;
        margin:0;
        padding:0;
        overflow:hidden;
        z-index:999999;
      }
    </style>
</head>
  <body>
    @yield('content')
  </body>
</html>

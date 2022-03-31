<?php
/**
 * Home page
 */
?>
@extends('frontend.layouts.figma')
@section('content')
<div id="content">
    <iframe
    id="frame"
    src="https://www.figma.com/embed?embed_host=astra&url={{ $figmaUrl }}"
    >
</div>
@endsection

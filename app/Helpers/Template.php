<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;


/**
 * frontAssets
 */
function frontAssets($file, $v = null) {
    return asset('assets/frontend/' . $file . (isset($v) ? '?v='.$v : ''));
}

/**
 * frontImage
 */
function frontImages($image, $v = null) {
    return asset('assets/frontend/images/' . $image . (isset($v) ? '?v='.$v : ''));
}

/**
 * backendImages
 */
function backendImages($image, $v = null) {
    return asset('assets/backend/images/' . $image . (isset($v) ? '?v='.$v : ''));
}

/**
 * isCurrent menu
 */
function isCurrent($name, $path = NULL) {
    $res = Route::current()->getName() == $name;
    if ($path !== NULL) {
        return $path === last(request()->segments()) && $res? 'active' : '';
    } else {
        return $res ? 'active' : '';
    }
}


/**
 * excerpt
 */
function excerptLimit($text, $max = 20) {
    return strlen($text) > $max ? substr($text, 0 ,$max)."..." : $text;
}


/**
 * validate & complete url
 */
function validateUrl($url) {
    if(filter_var($url, FILTER_VALIDATE_URL) === FALSE) {
        $url = "https://".$url;
    }
    return $url;
}


/**
 * validate & complete url
 */
function getEventParams(Event $event) {
    return ["event_id" => $event->id, "event_name" => $event->name];
}

function getPhotos($counts) {
    $photos = [];
    for ($i = 0; $i < $counts; $i++) {
        $img = $i + 1 .".JPG";
        $photos[$i] = frontImages("gallery/$img");
    }
    shuffle($photos);
    return $photos;
}

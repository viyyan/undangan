<?php

use Illuminate\Support\Facades\Route;

/**
 * frontAssets
 */
function frontAssets($file) {
    return asset('assets/frontend/' . $file);
}

/**
 * frontImage
 */
function frontImage($image) {
    return asset('assets/frontend/images/' . $image);
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

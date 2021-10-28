<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class WhatWeDoController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $data = array(
            "cssFileName" => "service",
            "classBody" => "p-service"
        );
        return view('frontend.pages.what-we-do.main', $data);
    }

    /**
     * Our Pillars page
     *
     * @return void
     */
    public function ourTools(Request $request)
    {
        $data = array(
            "cssFileName" => "our-tools",
            "classBody" => "p-our-tools bg--main-red-4"
        );
        return view('frontend.pages.our-tools.main', $data);
    }

}

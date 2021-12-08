<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseStudy;


class WhatWeDoController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $caseStudies = CaseStudy::where('status', 1)
        ->limit(3)->orderBy('created_at', 'desc')->get();
        $data = array(
            "title" => "What We Do",
            "cssFileName" => "service",
            "classBody" => "p-service",
            "caseStudies" => $caseStudies
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
            "title" => "Our Tools",
            "cssFileName" => "our-tools",
            "classBody" => "p-our-tools bg--main-red-4"
        );
        return view('frontend.pages.our-tools.main', $data);
    }

}

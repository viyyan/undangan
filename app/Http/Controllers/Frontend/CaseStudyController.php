<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CaseStudyController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $data = array(
            "cssFileName" => "case-study",
            "jsFileName" => "case-study",
            "caseStudyPermalink" => route('case-study'),
            "classBody" => "p-our-study bg--main-red-4"
        );
        return view('frontend.pages.case-study.main', $data);
    }

    /**
     * Our Pillars page
     *
     * @return void
     */
    public function details(string $slug, Request $request)
    {
        $data = array(
            "cssFileName" => "case-study-detail",
            "classBody" => "p-case-study-detail"
        );
        return view('frontend.pages.case-study.details', $data);
    }

}

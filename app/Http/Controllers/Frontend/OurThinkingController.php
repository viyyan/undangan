<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class OurThinkingController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $data = array(
            "cssFileName" => "our-thinking",
            "classBody" => "blog p-our-thinking"
        );
        return view('frontend.pages.our-thinking.main', $data);
    }

    /**
     * Our Pillars page
     *
     * @return void
     */
    public function details(string $slug, Request $request)
    {
        $data = array(
            "cssFileName" => "our-thinking-detail",
            "classBody" => "blog blog__detail p-our-thinking-detail"
        );
        return view('frontend.pages.our-thinking.details', $data);
    }

}

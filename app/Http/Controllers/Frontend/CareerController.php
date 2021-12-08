<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CareerController extends Controller
{
    public function index(Request $request)
    {
        
        $data = array(
            "title" => "Want to Join Us?",
            "cssFileName" => "career",
            "classBody" => "p-career bg--main-red-4"
        );
        return view('frontend.pages.careers.main', $data);
    }

    /**
     * Article detail page
     *
     * @return void
     */
    public function show(string $slug,  Request $request)
    {
        $data = array(
            "title" => "Want to Join Us?",
            "cssFileName" => "career-detail",
            "classBody" => "p-career-detail bg--main-red-4"
        );
        return view('frontend.pages.careers.details', $data);
    }
}

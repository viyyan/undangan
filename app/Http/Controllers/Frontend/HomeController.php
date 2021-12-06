<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseStudy;
use App\Models\Post;


class HomeController extends Controller
{
    /**
     * Home page
     *
     * @return void
     */
    public function index(Request $request)
    {

        $caseStudies = CaseStudy::where('status', 1)
                    ->limit(3)->orderBy('created_at', 'desc')->get();

        $posts = Post::where('status', 1)
                    ->limit(2)->orderBy('created_at', 'desc')->get();

        $data = array(
            "cssFileName" => "home",
            "jsFileName" => "home",
            "cssBody" => "home",
            "caseStudies" => $caseStudies,
            "posts" => $posts,
        );
        return view('frontend.pages.home.main', $data);
    }
}

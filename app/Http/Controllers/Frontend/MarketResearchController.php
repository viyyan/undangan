<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MarketResearchController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $data = array(
            "cssFileName" => "market-quiz",
            "classBody" => "p-market-quiz"
        );
        return view('frontend.pages.market-research.main', $data);
    }

    /**
     * Our Pillars page
     *
     * @return void
     */
    public function quiz(Request $request)
    {
        $data = array(
            "cssFileName" => "quiz",
            "jsFileName" => "quiz",
            "classBody" => "p-quiz",
            "isQuiz" => true
        );
        return view('frontend.pages.market-research.quiz', $data);
    }

}

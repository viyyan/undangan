<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Home page
     *
     * @return void
     */
    public function index(Request $request)
    {

        $data = array(
            "cssFileName" => "home",
            "cssBody" => "home",
        );
        return view('frontend.pages.home.main', $data);
    }
}

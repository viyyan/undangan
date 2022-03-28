<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Banner;

class HomeController extends Controller
{
    /**
     * Home page
     *
     * @return void
     */
    public function index(Request $request)
    {
        $banners = Banner::where("status", 1)
                    ->orderBy("order", "asc")->get();

        $data = array(
            "cssFileName" => "home",
            "jsFileName" => "home",
            "cssBody" => "home",
            "banners" => $banners
        );
        return view('frontend.pages.home.main', $data);
    }
}

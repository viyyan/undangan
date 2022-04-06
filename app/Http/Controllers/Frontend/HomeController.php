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
            "figmaUrl" => "https://www.figma.com/proto/6xS0JoS93lS6Fkcxxi1JQj/Elektron?page-id=4%3A27&node-id=4%3A29&viewport=241%2C48%2C0.21&scaling=scale-down-width&hide-ui=1"
            // "cssFileName" => "home",
            // "jsFileName" => "home",
            // "cssBody" => "home",
            // "banners" => $banners,
            // "posts" => $posts
        );
        return view('frontend.pages.figma.main', $data);
    }
}

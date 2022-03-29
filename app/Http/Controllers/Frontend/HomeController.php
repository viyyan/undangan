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

        $posts = Post::where("status", 1)
            ->orderBy("featured", "desc")
            ->orderBy("created_at", "desc")
            ->take(3)
            ->get();

        $data = array(
            "cssFileName" => "home",
            "jsFileName" => "home",
            "cssBody" => "home",
            "banners" => $banners,
            "posts" => $posts
        );
        return view('frontend.pages.home.main', $data);
    }
}

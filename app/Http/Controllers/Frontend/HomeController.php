<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Post;
use App\Models\Product;
use App\Models\Tvc;


class HomeController extends Controller
{
    /**
     * Home page
     *
     * @return void
     */
    public function index(Request $request)
    {
        // $banners = Banner::where("status", 1)
        // ->orderBy("order", "asc")->get();

        // $recommends = Post::where("status", 1)
        // ->orderBy("created_at", "desc")
        // ->take(3)
        // ->get();

        $data = array(
            "cssName" => "home",
            // "banners" => $banners,
            // "recommends" => $recommends,
        );
        return view('frontend.pages.home.main', $data);
    }
}

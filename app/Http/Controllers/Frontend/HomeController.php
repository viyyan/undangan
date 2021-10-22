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
        $banners = Banner::where("status", 1)
        ->orderBy("order", "asc")->get();

        $recommends = Post::where("status", 1)
        ->orderBy("created_at", "desc")
        ->take(3)
        ->get();

        $products = Product::where("status", 1)
        ->where("highlight", "!=", null)
        ->orderBy("highlight", "asc")
        ->take(3)
        ->get();

        $tvcs = Tvc::where("status", 1)
        ->where("highlight", "!=", null)
        ->orderBy("highlight", "asc")
        ->take(4)
        ->get();

        $data = array(
            "classBody" => "home",
            "banners" => $banners,
            "recommends" => $recommends,
            "products" => $products,
            "tvcs" => $tvcs,
        );
        return view('frontend.pages.home.main', $data);
    }
}

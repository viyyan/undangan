<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;


class OurThinkingController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $posts = Post::where('status', 1)->get();
        $data = array(
            "title" => "Our Thinking",
            "cssFileName" => "our-thinking",
            "jsFileName" => "our-thinking",
            "classBody" => "blog p-our-thinking bg--main-red-5",
            "posts" => $posts
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
        $post = Post::where('status', 1)->where('slug', $slug)->first();
        $recommends = Post::where("status", 1)
            ->where("id", '!=', $post->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
        $data = array(
            "title" => $post->title,
            "cssFileName" => "our-thinking-detail",
            "classBody" => "blog blog__detail p-our-thinking-detail",
            "post" => $post,
            "recommends" => $recommends
        );
        return view('frontend.pages.our-thinking.details', $data);
    }

}

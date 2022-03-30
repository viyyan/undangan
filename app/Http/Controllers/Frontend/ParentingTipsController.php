<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class ParentingTipsController extends Controller
{
    public $perPage = 20;
    /**
     * Articles page
     *
     * @return void
     */
    public function index(Request $request)
    {

        $categories = Category::where("status", 1)
            ->where("type", "post")
            ->orderBy("name", "asc")
            ->get();

        $posts = Post::where("status", 1);
        $catSlug = $request->get("category");
        if (isset($catSlug)) {
            $cat = $categories->filter(function ($item) use ($catSlug) {
                return $item->slug === $catSlug;
            })->values()->first();
            $posts->where("category_id", $cat->id);
        }
        $posts->orderBy("created_at", "asc");

        $data = array(
            "cssFileName" => "parenting",
            // "jsFileName" => "home",
            // "cssBody" => "home",
            "posts" => $posts->paginate($this->perPage),
            "categories" => $categories
        );
        return view('frontend.pages.parenting.main', $data);
    }

    /**
     * Article detail page
     *
     * @return void
     */
    public function show(string $slug,  Request $request)
    {
        $post = Post::where("slug", $slug)
            ->where('status', 1)
            ->firstOrFail();

        $posts = Post::where("status", 1)
            ->where("id", '!=', $post->id)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $data = array(
            "cssFileName" => "parenting",
            // "jsFileName" => "home",
            // "cssBody" => "home",
            "post" => $post,
            "posts" => $posts
        );
        return view('frontend.pages.parenting.details', $data);
    }
}

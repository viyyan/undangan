<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class ArticleController extends Controller
{

    public $perPage = 20;
    /**
     * Articles page
     *
     * @return void
     */
    public function index(Request $request)
    {
        $features = Post::where("status", 1)
            ->where("featured", true)
            ->orderBy("created_at", "desc")
            ->get();

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
        $sort = $request->get("sort");
        if ($sort === 'asc') {
            $posts->orderBy("created_at", "asc");
        } elseif ($sort === 'az') {
            $posts->orderBy("title", "asc");
        } elseif ($sort === 'za') {
            $posts->orderBy("title", "desc");
        } else {
            $posts->orderBy("created_at", "desc");
        }

        $sortOptions = array(
            'Newest' => 'desc',
            'Oldest' => 'asc',
            'Alphabetical A-Z' => 'az',
            'Alphabetical Z-A' => 'za',
        );
        $data = array(
            "features" => $features,
            "categories" => $categories,
            "posts" => $posts->paginate($this->perPage),
            "sortOptions" => $sortOptions,
        );
        return view('frontend.pages.article.main', $data);
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
        $recommends = Post::where("status", 1)
            ->where("id", '!=', $post->id)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $data = array(
            "post" => $post,
            "recommends" => $recommends
        );
        return view('frontend.pages.article.detail', $data);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Products page
     *
     * @return void
     */
    public function index(Request $request)
    {
        $products = Product::where("status", 1);
        $sort = $request->get("sort");
        if ($sort === 'asc') {
            $products->orderBy("created_at", "asc");
        } elseif ($sort === 'za') {
            $products->orderBy("name", "desc");
        } else {
            $products->orderBy("name", "asc");
        }

        $categories = Category::where("status", 1)
            ->where("type", "product")
            ->orderBy("name", "asc")
            ->get();

        $sortOptions = array(
            'Alphabetical A-Z' => 'az',
            'Alphabetical Z-A' => 'za',
        );
        $data = [
            "classBody" => "product",
            "products" => $products->get(),
            "categories" => $categories,
            "sortOptions" => $sortOptions
        ];
        return view('frontend.pages.product.main', $data);
    }

    /**
     * Product page
     *
     * @return void
     */
    public function show(string $slug, Request $request)
    {
        $product = Product::where("slug", $slug)
            ->where('status', 1)
            ->firstOrFail();
        $data = [
            "classBody" => "product",
            "product" => $product
        ];
        return view('frontend.pages.product.detail', $data);
    }
}

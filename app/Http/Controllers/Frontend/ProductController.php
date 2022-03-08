<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     *
     * @return void
     */
    public function index(Request $request)
    {

        $data = array(
            // "cssFileName" => "home",
            // "jsFileName" => "home",
            // "cssBody" => "home",
        );
        return view('frontend.pages.product.main', $data);
    }
}

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
            "cssFileName" => "product",
            // "jsFileName" => "home",
            // "cssBody" => "home",
        );
        return view('frontend.pages.product.details.syrup', $data);
    }

    public function syrup(Request $request)
    {

        $data = array(
            "cssFileName" => "product", //iki nganggo 1 css rapopo, tp nek koe pengen dipisah di rename wae dari yg index
            // "jsFileName" => "home",
            // "cssBody" => "home",
        );
        return view('frontend.pages.product.details.syrup', $data);
    }

    public function drop(Request $request)
    {

        $data = array(
            "cssFileName" => "product",
            // "jsFileName" => "home",
            // "cssBody" => "home",
        );
        return view('frontend.pages.product.details.drop', $data);
    }

    public function expectorant(Request $request)
    {

        $data = array(
            "cssFileName" => "product",
            // "jsFileName" => "home",
            // "cssBody" => "home",
        );
        return view('frontend.pages.product.details.expectorant', $data);
    }
}

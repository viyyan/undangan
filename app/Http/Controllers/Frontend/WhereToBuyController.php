<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhereToBuyController extends Controller
{
    /**
     *
     * @return void
     */
    public function index(Request $request)
    {

        $data = array(
            "cssFileName" => "wheretobuy",
            "jsFileName" => "addres",
            // "cssBody" => "home",
        );
        return view('frontend.pages.where-to-buy.main', $data);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        $data = array(
            "cssFileName" => "parenting",
            // "jsFileName" => "home",
            // "cssBody" => "home",
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
        $data = array(
            "cssFileName" => "parenting",
            // "jsFileName" => "home",
            // "cssBody" => "home",
        );
        return view('frontend.pages.parenting.details', $data);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $data = array(
            "cssFileName" => "contact",
            "jsFileName" => "contact",
            "classBody" => "p-contact",
            "isContact" => true
        );
        return view('frontend.pages.contact-us.main', $data);
    }
}

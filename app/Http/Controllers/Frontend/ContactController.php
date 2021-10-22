<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Contact page
     *
     * @return void
     */
    public function index(Request $request)
    {
        $data = [
            "classBody" => "contact"
        ];
        return view('frontend.pages.contact.main', $data);
    }
}

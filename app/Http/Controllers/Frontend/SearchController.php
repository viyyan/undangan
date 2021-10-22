<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Search page
     *
     * @return void
     */
    public function index(Request $request)
    {
        $data = [
            "classBody" => "search-result"
        ];
        return view('frontend.pages.search.main', $data);
    }
}

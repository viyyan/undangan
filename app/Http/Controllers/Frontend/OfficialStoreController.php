<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfficialStoreController extends Controller
{
    /**
     * Official Stores page
     *
     * @return void
     */
    public function index(Request $request)
    {
        $data = [];
        return view('frontend.pages.official-store.main', $data);
    }
}

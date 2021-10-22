<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    /**
     * Career page
     *
     * @return void
     */
    public function index(Request $request)
    {
        $careers = Career::where("status", 1)
            ->orderBy("created_at", "desc")
            ->get();
        $data = array(
            "careers" => $careers
        );
        return view('frontend.pages.career.main', $data);
    }

    /**
     * Career detail page
     *
     * @return void
     */
    public function show(string $slug,  Request $request)
    {
        $career = Career::where("slug", $slug)
            ->where('status', 1)
            ->firstOrFail();
        $data = array(
            "career" => $career
        );
        return view('frontend.pages.career.detail', $data);
    }
}

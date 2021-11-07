<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;


class WhoWeAreController extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $data = array(
            "cssFileName" => "about",
            "classBody" => "p-about"
        );
        return view('frontend.pages.who-we-are.main', $data);
    }

    /**
     * Our Pillars page
     *
     * @return void
     */
    public function ourPillars(Request $request)
    {
        $data = array(
            "cssFileName" => "our-pillars",
            "classBody" => "p-our-pillars bg--main-red-4"
        );
        return view('frontend.pages.our-pillars.main', $data);
    }

    /**
     * Our People page
     *
     * @return void
     */
    public function ourPeople(Request $request)
    {
        $result = Member::where('status', 1)->with('category')->orderBy('order')->get();

        $members = array();
        $leaders = array();
        foreach ($result as $item) {
            if (strtolower($item->category->name) == "leaders") {
                $leaders[] = $item;
            } else {
                $members[] = $item;
            }
        }

        $data = array(
            "cssFileName" => "our-people",
            "classBody" => "p-our-people bg--main-red-4",
            "leaders" => $leaders,
            "members" => $members,
        );
        // echo "<pre>";
        // print_r($members);
        // echo "<pre>";exit();
        return view('frontend.pages.our-people.main', $data);
    }

}

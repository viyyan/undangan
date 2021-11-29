<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CaseStudy;


class CaseStudyController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $catIndustry = $request->industries;
        $catResearches = $request->researches;
        $order = $request->order;
        $researches = Category::where('status', 1)->where('type', 'research')->get();
        $industries = Category::where('status', 1)->where('type', 'industry')->get();
        $caseStudies = CaseStudy::where('status', 1);

        if (isset($catIndustry)) {
            $caseStudies->whereIn('cat_industry_id', explode(",", $catIndustry));
        }
        if (isset($catResearches)) {
            $caseStudies->whereJsonContains('cat_research_ids', $catResearches);
        }

        if ($order == 'asc') {
            $caseStudies->orderBy('created_at', 'asc');
        } else {
            $caseStudies->orderBy('created_at', 'desc');
        }

        $data = array(
            "cssFileName" => "case-study",
            "jsFileName" => "case-study",
            "caseStudyPermalink" => route('case-study'),
            "classBody" => "p-case-study bg--main-red-4",
            "industries" => $industries,
            "researches" => $researches,
            "caseStudies" => $caseStudies->get(),
        );
        return view('frontend.pages.case-study.main', $data);
    }

    /**
     * Our Pillars page
     *
     * @return void
     */
    public function details(string $id, Request $request)
    {
        $caseStudy = CaseStudy::findOrFail($id);
        $data = array(
            "cssFileName" => "case-study-detail",
            "classBody" => "p-case-study-detail",
            "caseStudy" => $caseStudy
        );
        return view('frontend.pages.case-study.details', $data);
    }

}

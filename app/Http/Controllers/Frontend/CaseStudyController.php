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
        $catResearches = $request->type_of_research;
        $order = $request->order;
        $researches = Category::where('status', 1)->where('type', 'research')->get();
        $industries = Category::where('status', 1)->where('type', 'industry')->get();
        $caseStudies = CaseStudy::where('status', 1);

        $researches = $researches->filter(function($case) {
            return $case->cases()->count() > 0;
        });

        if (isset($catIndustry)) {
            $caseStudies->whereIn('cat_industry_id', explode(",", $catIndustry));
        }
        if (isset($catResearches)) {
            $resArr = array_diff(explode(",", $catResearches),array(""));
            $caseStudies->where(function ($q) use ($resArr) {
                foreach($resArr as $res)
                {
                    $q->whereJsonContains('cat_research_ids', $res, 'or');
                }
            });
        }

        if ($order == 'asc') {
            $caseStudies->orderBy('created_at', 'asc');
        } else {
            $caseStudies->orderBy('created_at', 'desc');
        }

        $data = array(
            "title" => "Case Studies",
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
            "title" => $caseStudy->researchesStr,
            "cssFileName" => "case-study-detail",
            "classBody" => "p-case-study-detail",
            "caseStudy" => $caseStudy
        );
        return view('frontend.pages.case-study.details', $data);
    }

}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investor;
use App\Models\Category;

class InvestorController extends Controller
{
    public $title = "Investor - ";


    public function index(string $category = null, string $year = null, Request $request)
    {
        $categories = $this->_getCategories();
        $investors = Investor::where("status", 1);

        if (isset($category)) {
            $cat = $categories->filter(function ($item) use ($category) {
                return $item->slug === $category;
            })->values()->first();
        } else {
            $cat = $categories->first();
        }
        if (isset($cat)) $investors->where("category_id", $cat->id);
        if (isset($year)) $investors->where("group_year", $year);

        $sort = $request->get("sort");
        if ($sort === 'az') {
            $investors->orderBy("title", "asc");
        } elseif ($sort === 'za') {
            $investors->orderBy("title", "desc");
        } else {
            $investors->orderBy("created_at", "desc");
        }

        $invs = $investors->get();
        $years = array();
        if (empty($year)) {
            foreach ($invs as $key => $item) {
                if (isset($item['group_year'])) {
                    $years[$item['group_year']] = $cat->slug;
                    unset($invs[$key]);
                }
            }
        }

        krsort($years, SORT_NUMERIC);

        $sortOptions = array(
            'Alphabetical A-Z' => 'az',
            'Alphabetical Z-A' => 'za',
        );

        $subtitle = (isset($cat)) ? $cat->name : '';
        $subtitle .= (isset($year)) ? ' - '. $year : '';

        $data = array(
            "title" => $this->title.((isset($cat)) ? $cat->name : ''),
            "subTitle" => $subtitle,
            "categories" => $categories,
            "groupYears" => $years,
            "investors" => $invs,
            "sortOptions" => $sortOptions,
        );

        return view('frontend.pages.investor.main', $data);
    }

    private function _getCategories()
    {
        return Category::where("status", 1)
            ->where("type", "investor")
            ->orderBy("order", "asc")
            ->get();
    }

    /**
     * Investor detail page
     *
     * @return void
     */
    public function show(string $slug,  Request $request)
    {
        $investor = Investor::where("slug", $slug)
            ->where('status', 1)
            ->firstOrFail();

        $data = array(
            "investor" => $investor
        );
        return view('frontend.pages.investor.detail', $data);
    }
}

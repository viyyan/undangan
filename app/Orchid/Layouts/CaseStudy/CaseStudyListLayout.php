<?php

namespace App\Orchid\Layouts\CaseStudy;

use App\Models\CaseStudy;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class CaseStudyListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'caseStudies';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title', 'Title')
                ->render(function (CaseStudy $caseStudy) {
                    return Link::make($caseStudy->title)
                        ->route('platform.case-study.edit', $caseStudy);
                }),

            TD::make('cat_industry_id', 'Industry')
                ->render(function (CaseStudy $caseStudy) {
                    return $caseStudy->industry->name;
                }),

            TD::make('cat_research_ids', 'Research')
                ->render(function (CaseStudy $caseStudy) {
                    $researches = '';
                    foreach($caseStudy->researches as $key=>$research) {
                        if ($key > 0) $researches .= ", ";
                        $researches .= $research->name;
                    }
                    return $researches;
                }),

            TD::make('status', 'Status')
                ->render(function (CaseStudy $caseStudy) {
                    return ($caseStudy->status == 1) ? "Publish" : "Draft";
                }),

            TD::make('created_at', 'Date')
                ->render(function (CaseStudy $caseStudy) {
                    return $caseStudy->created_at->format('d F Y');
                }),
        ];
    }
}

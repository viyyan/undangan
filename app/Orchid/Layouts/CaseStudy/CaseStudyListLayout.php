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
                        ->route('platform.caseStudy.edit', $caseStudy);
                }),

            TD::make('category_id', 'Category')
                ->render(function (CaseStudy $caseStudy) {
                    return $caseStudy->category->name;
                }),

            TD::make('author_id', 'Author')
                ->render(function (CaseStudy $caseStudy) {
                    return $caseStudy->author->name;
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

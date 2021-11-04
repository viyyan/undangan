<?php

namespace App\Orchid\Screens\CaseStudy;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\CaseStudy\CaseStudyListLayout;
use App\Models\CaseStudy;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;

class CaseStudyListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'CaseStudies';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All caseStudies';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'caseStudies' => CaseStudy::filters()->defaultSort('id')->paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.case-study.edit')
                ->class('btn btn-primary')
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            CaseStudyListLayout::class
        ];
    }
}

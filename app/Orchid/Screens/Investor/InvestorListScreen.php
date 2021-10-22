<?php

namespace App\Orchid\Screens\Investor;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Investor\InvestorListLayout;
use App\Models\Investor;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;

class InvestorListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Investors';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All investors';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'investors' => Investor::filters()->defaultSort('id')->paginate()
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
                ->route('platform.investor.edit')
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
            InvestorListLayout::class
        ];
    }
}

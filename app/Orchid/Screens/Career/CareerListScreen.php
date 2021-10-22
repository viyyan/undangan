<?php

namespace App\Orchid\Screens\Career;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Career\CareerListLayout;
use App\Models\Career;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;

class CareerListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Positions';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All positions';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'careers' => Career::filters()->defaultSort('id')->paginate()
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
                ->route('platform.career.edit')
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
            CareerListLayout::class
        ];
    }
}

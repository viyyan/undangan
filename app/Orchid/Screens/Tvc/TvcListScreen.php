<?php

namespace App\Orchid\Screens\Tvc;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Tvc\TvcListLayout;
use App\Models\Tvc;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;

class TvcListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'TvcListScreen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'tvcs' => Tvc::filters()->defaultSort('highlight')->paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.tvc.edit')
                ->class('btn btn-primary')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            TvcListLayout::class
        ];
    }
}

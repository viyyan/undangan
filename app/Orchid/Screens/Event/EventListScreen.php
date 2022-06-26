<?php

namespace App\Orchid\Screens\Event;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Event\EventListLayout;
use App\Models\Event;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;


class EventListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Events';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All events';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'events' => Event::filters()->defaultSort('id')->paginate()
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
                ->route('platform.event.edit')
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
            EventListLayout::class
        ];
    }
}

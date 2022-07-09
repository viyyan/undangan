<?php

namespace App\Orchid\Layouts\Event;

use App\Models\Event;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use App\Helpers\Template;

class EventListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'events';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', 'Name')
                ->render(function (Event $event) {
                    return Link::make($event->name)
                        ->route('platform.event.edit', $event);
                }),

            TD::make('id', 'Guests')
                ->render(function (Event $event) {
                    return Link::make("Guest List")
                        ->route('platform.guest.list', getEventParams($event));
                }),

            TD::make('user_id', 'Client')
                ->render(function (Event $event) {
                    return $event->client->name;
                }),

            TD::make('status', 'Status')
                ->render(function (Event $event) {
                    return ($event->status == 1) ? "Publish" : "Draft";
                }),

            TD::make('created_at', 'Date')
                ->render(function (Event $event) {
                    return $event->created_at->format('d F Y');
                }),
        ];
    }
}

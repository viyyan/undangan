<?php

namespace App\Orchid\Layouts\Guest;

use App\Models\Guest;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class GuestListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'guests';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', 'Name')
                ->render(function (Guest $guest) {
                    return Link::make($guest->name)
                        ->route('platform.guest.edit', $guest);
                }),

            TD::make('event_id', 'Event Name')
                ->render(function (Guest $guest) {
                    return $guest->event->name;
                }),

            TD::make('confirmed', 'Confirmed')
                ->render(function (Guest $guest) {
                    return $guest->confirmed ? "confirmed" : "waiting";
                }),

            TD::make('updated_at', 'Updated')
                ->render(function (Guest $guest) {
                    return $guest->created_at->format('h:i, d F Y');
                }),
        ];
    }
}

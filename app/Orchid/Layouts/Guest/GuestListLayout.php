<?php

namespace App\Orchid\Layouts\Guest;

use App\Models\Guest;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\Button;


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
                ->sort()
                ->render(function (Guest $guest) {
                    return Link::make($guest->name)
                        ->route('platform.guest.edit', [$guest, "event_id" => $guest->event_id]);
                }),

            TD::make('status', 'Status')
                ->sort()
                ->render(function (Guest $guest) {
                    return $guest->statusText();
                }),

            TD::make('phone', 'Send')
                ->sort()
                ->render(function (Guest $guest) {
                    if ($guest->status == 1) {
                        return Link::make('Send')->target("_blank")->class('btn btn-success')->route('wa-send', $guest->id);
                     } else {
                        return "sent";
                     }
                }),

            TD::make('type', 'Type')
                ->sort()
                ->render(function (Guest $guest) {
                    return $guest->typeText();
                }),

            TD::make('from', 'Guest From')
                ->sort()
                ->render(function (Guest $guest) {
                    return $guest->from;
                }),

            TD::make('confirmed', 'Confirmed to Attend')
                ->sort()
                ->render(function (Guest $guest) {
                    return $guest->confirmedText();
                }),


            TD::make('total_guests', 'Total Guests')
                ->sort()
                ->render(function (Guest $guest) {
                    return ($guest->type == 1) ? $guest->total_guests : "-";
                }),

            TD::make('updated_at', 'Updated')
                ->sort()
                ->render(function (Guest $guest) {
                    return $guest->updated_at->format('h:i, d F Y');
                }),
        ];
    }
}

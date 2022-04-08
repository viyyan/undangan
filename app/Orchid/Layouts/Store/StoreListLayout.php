<?php

namespace App\Orchid\Layouts\Store;

use App\Models\Store;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class StoreListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'stores';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title', 'Title')
                ->render(function (Store $store) {
                    return Link::make($store->name)
                        ->route('platform.store.edit', $store);
                }),

            TD::make('address', 'Address')
                ->render(function (Store $store) {
                    return $store->address;
                }),

            TD::make('status', 'Location')
                ->render(function (Store $store) {
                    return "<a href='https://maps.google.com/?q=".$store->name." ".$store->address."' target='_blank'>📌 Location</a>";
                }),

            TD::make('created_at', 'Date')
                ->render(function (Store $store) {
                    return $store->created_at->format('d F Y');
                }),
        ];
    }
}

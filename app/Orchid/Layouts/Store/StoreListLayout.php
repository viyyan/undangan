<?php

namespace App\Orchid\Layouts\Store;

use App\Models\Store;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use App\Helpers\Template;

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
                    return excerptLimit($store->address, 50);
                }),

            TD::make('status', 'Status')
                ->render(function (Store $store) {
                    return ($store->status == 1) ? "Publish" : "Coming Soon";
                }),

            TD::make('created_at', 'Date')
                ->render(function (Store $store) {
                    return $store->created_at->format('d F Y');
                }),
        ];
    }
}

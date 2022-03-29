<?php

namespace App\Orchid\Layouts\Banner;

use App\Models\Banner;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class BannerListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'banners';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title', 'Title')
                ->render(function (Banner $banner) {
                    return Link::make($banner->title)
                        ->route('platform.banner.edit', $banner);
                }),

            TD::make('order', 'Order'),

            TD::make('status', 'Status')
                ->render(function (Banner $banner) {
                    return ($banner->status == 1) ? "Publish" : "Draft";
                }),

            TD::make('created_at', 'Date')
                ->render(function (Banner $banner) {
                    return $banner->created_at;
                }),
        ];
    }
}

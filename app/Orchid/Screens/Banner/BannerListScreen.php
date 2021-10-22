<?php

namespace App\Orchid\Screens\Banner;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Banner\BannerListLayout;
use App\Models\Banner;
use Orchid\Screen\Actions\Link;

class BannerListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'All Banners';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'banners' => Banner::filters()->defaultSort('order')->paginate()
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
                ->route('platform.banner.edit')
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
            BannerListLayout::class
        ];
    }

    /**
     * @return TD[]
     */
    private function remove(Banner $banner)
    {
        $banner->delete();

        Alert::info('You have successfully deleted the banner.');

        return redirect()->route('platform.banner.list');
    }
}

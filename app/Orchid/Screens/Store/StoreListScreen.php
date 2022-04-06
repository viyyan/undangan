<?php

namespace App\Orchid\Screens\Store;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Store\StoreListLayout;
use App\Models\Store;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;


class StoreListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Stores';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All stores';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'stores' => Store::filters()->defaultSort('id')->paginate()
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
                ->route('platform.store.edit')
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
            StoreListLayout::class
        ];
    }
}

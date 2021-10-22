<?php

namespace App\Orchid\Screens\Product;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Product\ProductListLayout;
use App\Models\Product;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;


class ProductListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'ProductListScreen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'products' => Product::filters()->defaultSort('order')->paginate()
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
                ->route('platform.product.edit')
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
            ProductListLayout::class
        ];
    }
}

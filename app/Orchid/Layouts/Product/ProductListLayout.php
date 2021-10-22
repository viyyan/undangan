<?php

namespace App\Orchid\Layouts\Product;

use App\Models\Product;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class ProductListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'products';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', 'Name')
                ->render(function (Product $product) {
                    return Link::make($product->name)
                        ->route('platform.product.edit', $product);
                }),

            TD::make('category_id', 'Category')
                ->render(function (Product $product) {
                    return $product->category->name;
                }),

            TD::make('status', 'Status')
                ->render(function (Product $product) {
                    return ($product->status == 1) ? "Publish" : "Draft";
                }),

            TD::make('created_at', 'Date')
                ->render(function (Product $product) {
                    return $product->created_at->format('d F Y');
                }),
        ];
    }
}

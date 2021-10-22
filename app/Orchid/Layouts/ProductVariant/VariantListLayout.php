<?php

namespace App\Orchid\Layouts\ProductVariant;

use App\Models\ProductVariant;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class VariantListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'variants';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('name', 'Name')
                ->render(function (ProductVariant $variant) {
                    return Link::make($variant->name)
                        ->route('platform.variant.edit', $variant, ['product_id' => $variant->product_id]);
                }),

            TD::make('subtitle', 'Subtitle')
                ->render(function (ProductVariant $variant) {
                    return $variant->subtitle;
                }),
        ];
    }
}

<?php

namespace App\Orchid\Layouts\Category;

use App\Models\Category;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\ModalToggle;


class CategoryListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'categories';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', 'Name')
                ->render(function (Category $category) {
                    return Link::make($category->name)
                        ->route('platform.category.edit', $category);
                }),

            TD::make('status', 'Status')
                ->render(function (Category $category) {
                    return ($category->status == 1) ? "Publish" : "Draft";
                }),

            TD::make('created_at', 'Date')
                ->render(function (Category $category) {
                    return $category->created_at->format('d F Y');
                }),
        ];
    }

}

<?php

namespace App\Orchid\Layouts\Career;

use App\Models\Career;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class CareerListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'careers';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title', 'Title')
                ->render(function (Career $career) {
                    return Link::make($career->title)
                        ->route('platform.career.edit', $career);
                }),

            TD::make('category_id', 'Category')
                ->render(function (Career $career) {
                    return $career->category->name;
                }),

            TD::make('status', 'Status')
                ->render(function (Career $career) {
                    return ($career->status == 1) ? "Publish" : "Draft";
                }),

            TD::make('created_at', 'Date')
                ->render(function (Career $career) {
                    return $career->created_at->format('d F Y');
                }),
        ];
    }
}

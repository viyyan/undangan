<?php

namespace App\Orchid\Layouts\Investor;

use App\Models\Investor;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class InvestorListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'investors';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title', 'Title')
                ->render(function (Investor $investor) {
                    return Link::make($investor->title)
                        ->route('platform.investor.edit', $investor);
                }),

            TD::make('category_id', 'Category')
                ->render(function (Investor $investor) {
                    return $investor->category->name;
                }),

            TD::make('status', 'Status')
                ->render(function (Investor $investor) {
                    return ($investor->status == 1) ? "Publish" : "Draft";
                }),

            TD::make('created_at', 'Date')
                ->render(function (Investor $investor) {
                    return $investor->created_at->format('d F Y');
                }),
        ];
    }
}

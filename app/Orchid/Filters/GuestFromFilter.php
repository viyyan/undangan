<?php

namespace App\Orchid\Filters;

use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Input;
use Illuminate\Http\Request;


class GuestFromFilter extends Filter
{
    /**
     * @var array
     */
    public $parameters = ['from', 'search'];

    /**
     * @return string
     */
    public function name(): string
    {
        return 'From';
    }

    /**
     * @param Builder $builder
     *
     * @return Builder
     */
    public function run(Builder $builder): Builder
    {
        // hardcoded
        return $builder
        ->where('event_id', 1)
        ->where('name', 'like', '%'.$this->request->get('search').'%')
        ->where('from', $this->request->get('from'));

    }

    /**
     * @return Field[]
     */
    public function display(): array
    {
        return [
            Input::make('search')
                ->title("Search")
                ->value($this->request->get('search')),
            Select::make('from')
                ->title("Guest From")
                ->empty()
                ->value($this->request->get('from'))
                ->options([
                    'Tyas' => 'Tyas',
                    'Fian' => 'Fian',
                ])
        ];
    }
}

<?php

namespace App\Orchid\Filters;

use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Input;
use Illuminate\Http\Request;


class GuestSearchFilter extends Filter
{
    /**
     * @var array
     */
    public $parameters = ['search'];

    /**
     * @return string
     */
    public function name(): string
    {
        return 'Search';
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
        ->where('name', 'like', '%'.$this->request->get('search').'%');
    }

    /**
     * @return Field[]
     */
    public function display(): array
    {
        return [
            Input::make('search')
                ->title("Search")
                ->value($this->request->get('search'))
        ];
    }
}

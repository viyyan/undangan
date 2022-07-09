<?php

namespace App\Orchid\Filters;

use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Select;

class GuestFromFilter extends Filter
{
    /**
     * @var array
     */
    public $parameters = ['from'];

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
        return $builder->where('from', $this->request->get('from'));
    }

    /**
     * @return Field[]
     */
    public function display(): array
    {
        return [
            Select::make('from')
                        ->title("Guest From")
                        ->empty('Tyas', 'Tyas')
                        ->value($this->request->get('from'))
                        ->options([
                            'Tyas' => 'Tyas',
                            'Fian' => 'Fian',
                        ])
        ];
    }
}

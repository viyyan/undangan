<?php

namespace App\Orchid\Layouts\Guest;

use Orchid\Filters\Filter;
use App\Orchid\Filters\GuestFromFilter;
use App\Orchid\Filters\GuestSearchFilter;
use Orchid\Screen\Layouts\Selection;

class GuestSelection extends Selection
{
    /**
     * @return Filter[]
     */
    public function filters(): array
    {
        return [
            GuestFromFilter::class
        ];
    }
}

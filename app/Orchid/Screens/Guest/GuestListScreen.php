<?php

namespace App\Orchid\Screens\Guest;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Guest\GuestListLayout;
use App\Models\Guest;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;


class GuestListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Guests';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All guests';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'guests' => Guest::filters()->defaultSort('id')->paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.guest.edit')
                ->class('btn btn-primary')
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            GuestListLayout::class
        ];
    }
}

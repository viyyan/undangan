<?php

namespace App\Orchid\Screens\Guest;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Guest\GuestListLayout;
use App\Orchid\Layouts\Guest\GuestSelection;
use App\Orchid\Filters\GuestFromFilter;
use App\Models\Guest;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;
use Illuminate\Http\Request;



class GuestListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Guests';

    // construct
    public function __construct(Request $request) {
        $this->event_id = $request->get('event_id');
        $this->name = $request->get('event_name') . " $this->name";
    }
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
            'guests' => Guest::filtersApply([GuestFromFilter::class])
            ->where('event_id', $this->event_id )
            ->defaultSort('created_at', 'desc')->paginate()
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
                ->route('platform.guest.edit', ["event_id" => $this->event_id ])
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

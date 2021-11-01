<?php

namespace App\Orchid\Screens\Member;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\Member\MemberListLayout;
use App\Models\Member;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;

class MemberListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Members';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All members';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'members' => Member::filters()->defaultSort('id')->paginate()
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
                ->route('platform.member.edit')
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
            MemberListLayout::class
        ];
    }
}

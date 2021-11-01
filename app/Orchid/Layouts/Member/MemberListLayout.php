<?php

namespace App\Orchid\Layouts\Member;

use App\Models\Member;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class MemberListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'members';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title', 'Title')
                ->render(function (Member $member) {
                    return Link::make($member->title)
                        ->route('platform.member.edit', $member);
                }),

            TD::make('category_id', 'Level')
                ->render(function (Member $member) {
                    return $member->category->name;
                }),

            TD::make('status', 'Status')
                ->render(function (Member $member) {
                    return ($member->status == 1) ? "Publish" : "Draft";
                }),

            TD::make('created_at', 'Date')
                ->render(function (Member $member) {
                    return $member->created_at->format('d F Y');
                }),
        ];
    }
}

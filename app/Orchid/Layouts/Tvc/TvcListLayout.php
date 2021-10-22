<?php

namespace App\Orchid\Layouts\Tvc;

use App\Models\Tvc;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class TvcListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'tvcs';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('title', 'Title')
                ->render(function (Tvc $tvc) {
                    return Link::make($tvc->title)
                        ->route('platform.tvc.edit', $tvc);
                }),

            TD::make('youtube_id', 'Youtube')
                ->render(function (Tvc $tvc) {
                    return <<<"blade"
                        <iframe width="250" height="150" src="$tvc->youtubeEmbedUrl"
                            title="$tvc->title">
                        </iframe>
                    blade;
                }),

            TD::make('status', 'Status')
                ->render(function (Tvc $tvc) {
                    return ($tvc->status == 1) ? "Publish" : "Draft";
                }),

            TD::make('highlight', 'Highlight Order')
                ->render(function (Tvc $tvc) {
                    return (isset($tvc->highlight)) ? $tvc->highlight + 1 : "";
                }),

            TD::make('created_at', 'Date')
                ->render(function (Tvc $tvc) {
                    return $tvc->created_at->format('d F Y');
                }),
        ];
    }
}

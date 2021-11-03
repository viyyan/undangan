<?php

namespace App\Orchid\Layouts\Quiz;

use App\Models\QuizOption;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\ModalToggle;


class OptionListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'options';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', 'Name')
                ->render(function (QuizOption $quizoption) {
                    return Link::make($quizoption->name)
                        ->route('platform.quiz.option.edit', $quizoption);
                }),

            TD::make('code', 'Code')
                ->render(function (QuizOption $quizoption) {
                    return $quizoption->code;
                }),

            TD::make('sub_options', 'Sub Options')
                ->render(function (QuizOption $quizoption) {
                    return strval($quizoption->sub_options);
                }),

            TD::make('status', 'Status')
                ->render(function (QuizOption $quizoption) {
                    return ($quizoption->status == 1) ? "Publish" : "Draft";
                }),

            TD::make('created_at', 'Date')
                ->render(function (QuizOption $quizoption) {
                    return $quizoption->created_at->format('d F Y');
                }),
        ];
    }

}

<?php

namespace App\Orchid\Layouts\Quiz;

use App\Models\QuizOptionChild;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use App\Orchid\Layouts\Quiz\SubOptionListLayout;
use Orchid\Screen\Actions\ModalToggle;


class OptionChildListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'option_childs';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', 'Name')
                ->render(function (QuizOptionChild $quizOptionChild) {
                    return Link::make($quizOptionChild->name)
                        ->route('platform.quiz.option.child.edit', [$quizOptionChild,
                        'quiz_option_name' => $quizOptionChild->parent->name,
                        'quiz_id' => $quizOptionChild->parent->quiz_id]);
                }),

            // TD::make('code', 'Code')
            //     ->render(function (QuizOptionChild $quizOptionChild) {
            //         return $quizOptionChild->code;
            //     }),

            TD::make('status', 'Status')
                ->render(function (QuizOptionChild $quizOptionChild) {
                    return ($quizOptionChild->status == 1) ? "Publish" : "Draft";
                }),

            TD::make('created_at', 'Date')
                ->render(function (QuizOptionChild $quizOptionChild) {
                    return $quizOptionChild->created_at->format('d F Y');
                }),
        ];
    }

}

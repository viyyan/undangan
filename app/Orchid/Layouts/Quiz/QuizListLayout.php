<?php

namespace App\Orchid\Layouts\Quiz;

use App\Models\Quiz;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\ModalToggle;


class QuizListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'quizzes';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('order', '')
                ->render(function (Quiz $quiz) {
                    return Link::make("Question ".$quiz->order)
                            ->route('platform.quiz.edit', $quiz);
                }),
            TD::make('question', 'Question')
                ->render(function (Quiz $quiz) {
                    return excerptLimit($quiz->question, 50);
                }),

            TD::make('status', 'Status')
                ->render(function (Quiz $quiz) {
                    return ($quiz->status == 1) ? "Publish" : "Draft";
                }),

            TD::make('created_at', 'Date')
                ->render(function (Quiz $quiz) {
                    return $quiz->created_at->format('d F Y');
                }),
        ];
    }

}

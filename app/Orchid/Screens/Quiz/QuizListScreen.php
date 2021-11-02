<?php

namespace App\Orchid\Screens\Quiz;

use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use App\Orchid\Layouts\Quiz\QuizListLayout;
use App\Models\Quiz;
use Orchid\Screen\Actions\Link;


class QuizListScreen extends Screen
{
   /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Quizzes';


    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All quizzes';


    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $quizzes = Quiz::filters()
                ->orderBy('order', 'asc');
        return [
            'quizzes' => $quizzes->paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.quiz.edit')
                ->class('btn btn-primary')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            QuizListLayout::class
        ];
    }

    /**
     * @return TD[]
     */
    private function remove(Quiz $quiz)
    {
        $quiz->delete();

        Alert::info('You have successfully deleted the quiz.');

        return redirect()->route('platform.quiz.list', ['type' => $this->type]);
    }
}

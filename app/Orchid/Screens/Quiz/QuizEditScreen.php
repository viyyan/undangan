<?php

namespace App\Orchid\Screens\Quiz;

use Orchid\Screen\Screen;
use App\Models\Quiz;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Illuminate\Http\Request;
use App\Orchid\Layouts\Quiz\OptionListLayout;


class QuizEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Quiz';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Quiz $quiz): array
    {
        $this->exists = $quiz->exists;
        if($this->exists){
            $this->name = 'Edit Quiz';
        }
        return [
            'quiz' => $quiz,
            'options' => $quiz->options,
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
            Button::make('Save')
                ->method('createOrUpdate')
                ->class('btn btn-success')
                ->canSee(!$this->exists),

            Button::make('Remove')
                ->class('btn btn-danger')
                ->method('remove')
                ->canSee($this->exists),

            Button::make('Update')
                ->method('createOrUpdate')
                ->class('btn btn-success')
                ->canSee($this->exists),
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
            Layout::rows([

                Input::make('quiz.order')
                    ->title('Question Number')
                    ->type("number")
                    ->min(1)
                    ->required(),

                Input::make('quiz.question')
                    ->title('Question')
                    ->required(),

                Select::make('quiz.type')
                    ->title("Type")
                    ->empty("No select")
                    ->options([
                        'tags' => 'Tags',
                        'binary'  => 'Binary',
                        'steps'  => 'Steps',
                    ])
                    ->required(),

                Select::make('quiz.status')
                    ->title("Status")
                    ->empty('Publish', 1)
                    ->options([
                        1 => 'Publish',
                        0  => 'Draft'
                    ])
                    ->required(),
            ]),
            Layout::rows([
                Button::make('Add Option')
                    ->icon('plus')
                    ->method('addOption')
                    ->class('btn btn-primary'),
            ])->title('Quiz Options'),
            OptionListLayout::class,
        ];
    }

    /**
     * @param Quiz    $quiz
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Quiz $quiz, Request $request)
    {
        $this->_save($quiz, $request);
        Alert::info('You have successfully created an quiz.');

        return redirect()->route('platform.quiz.list', ['type' => $quiz->type]);
    }

    /**
     * @param Quiz $quiz
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Quiz $quiz)
    {
        $quiz->delete();

        Alert::info('You have successfully deleted the quiz.');

        return redirect()->route('platform.quiz.list', ['type' => $quiz->type]);
    }

    /**
     * @param Quiz    $quiz
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addOption(Quiz $quiz, Request $request)
    {
        $quiz = $this->_save($quiz, $request);
        return redirect()->route('platform.quiz.option.edit', ['quiz_id' => $quiz->id]);
    }

    private function _save(Quiz $quiz, Request $request)
    {
        $quiz->fill($request->get('quiz'));
        $quiz->save();
        return $quiz;
    }
}

<?php

namespace App\Orchid\Screens\QuizOption;

use Orchid\Screen\Screen;
use App\Models\QuizOption;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Illuminate\Http\Request;

class OptionEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create QuizOption';

    public $quiz_id;

    // construct
    public function __construct(Request $request) {
        $this->quiz_id = $request->get('quiz_id');
    }

    /**
     * Query data.
     *
     * @return array
     */
    public function query(QuizOption $quizoption): array
    {
        $this->exists = $quizoption->exists;
        if($this->exists){
            $this->name = 'Edit QuizOption';
        } else {
            $quizoption->quiz_id = $this->quiz_id;
        }

        return [
            'quizoption' => $quizoption
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

                Input::make('quizoption.quiz_id')
                    ->title('Quiz')
                    ->readonly(true),

                Input::make('quizoption.name')
                    ->title('Option Name')
                    ->placeholder('Option / answer name')
                    ->required(),

                Input::make('quizoption.code')
                    ->title('Option Code')
                    ->placeholder('1')
                    ->type('number')
                    ->min(1)
                    ->required(),

                Input::make('quizoption.sub_options')
                    ->title('Sub Options')
                    ->placeholder('1,2,1')
                    ->help('Set previous answer combination, if the options refer from previous questions.'),

                Select::make('quizoption.status')
                    ->title("Status")
                    ->empty('Publish', 1)
                    ->options([
                        1 => 'Publish',
                        0  => 'Draft'
                    ])
                    ->required()
            ])
        ];
    }

    /**
     * @param QuizOption    $quizoption
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(QuizOption $quizoption, Request $request)
    {
        $quizoption->fill($request->get('quizoption'));
        $quizoption->save();

        Alert::info('You have successfully created an quiz option.');

        return redirect()->route('platform.quiz.edit', $quizoption->quiz_id);
    }

    /**
     * @param QuizOption $quizoption
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(QuizOption $quizoption)
    {
        $quizoption->delete();

        Alert::info('You have successfully deleted the quiz option.');

        return redirect()->route('platform.quiz.edit', $quizoption->quiz_id);
    }
}

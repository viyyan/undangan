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
use Orchid\Screen\Fields\Group;
use App\Orchid\Layouts\Quiz\SubOptionListLayout;
use App\Orchid\Layouts\Quiz\OptionChildListLayout;


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
            $defCode = QuizOption::where('quiz_id', $this->quiz_id)->count() + 1;
            $quizoption->code = $defCode;
        }

        return [
            'quizoption' => $quizoption,
            'sub_options' => isset($quizoption->sub_options) ? $quizoption->sub_options : [],
            'option_childs' => $quizoption->optionChilds
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
                    ->title('Option / Answer')
                    ->required(),

                Input::make('quizoption.code')
                    ->title('Option Code')
                    ->type('number')
                    ->min(1)
                    ->required(),
                Select::make('quizoption.status')
                    ->title("Status")
                    ->empty('Publish', 1)
                    ->options([
                        1 => 'Publish',
                        0  => 'Draft'
                    ])
                    ->required()
            ]),
            Layout::rows([
                Group::make([
                    Input::make('subs')
                    ->help('If the options refer from previous questions,<br> set with answer code combination ex. Q1: 1, Q2: 2, Q3: 1 write "1.2.1"'),
                    Button::make('Add')
                        ->method('addSubOption')
                        ->class('btn btn-success'),
                ]),
            ])->title('Prev Options Combinations'),
            SubOptionListLayout::class,

            Layout::rows([
                Button::make('Add Option Child')
                    ->icon('plus')
                    ->method('addChild')
                    ->class('btn btn-primary'),
            ])->title('Quiz Option Child'),
            OptionChildListLayout::class,
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
        $option = $this->_save($quizoption, $request);
        if ($option) {
            Alert::info('You have successfully created an quiz option.');

            return redirect()->route('platform.quiz.edit', $quizoption->quiz_id);
        }
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

    /**
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function removeSub($sub, QuizOption $quizoption)
    {
        $subs = !empty($quizoption->sub_options) ? $quizoption->sub_options : array();
        $subs = array_diff($subs, [$sub]);
        $quizoption->sub_options = $subs;
        $quizoption->save();
        Alert::info('You have successfully removed an quiz option.');
    }


    /**
     * @param QuizOption    $quizoption
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addSubOption(QuizOption $quizoption, Request $request)
    {
        $quizoption = $this->_save($quizoption, $request);
        if ($quizoption) {
            $subs = !empty($quizoption->sub_options) ? $quizoption->sub_options : array();
            if (!empty($request->get('subs'))) {
                array_push($subs, $request->get('subs'));
                $quizoption->sub_options = $subs;
                $quizoption->save();
                Alert::info('You have successfully created an quiz option.');
            } else {
                Alert::error('Sub options can\'t be empty text!');
            }
            return redirect()->route('platform.quiz.option.edit', $quizoption->id);
        }
    }


    private function _save(QuizOption $quizoption, Request $request)
    {
        $quizoption->fill($request->get('quizoption'));
        $exist = QuizOption::where('id', '!=', $quizoption->id)
                ->where('quiz_id', $quizoption->quiz_id)
                ->where('name', $quizoption->name)->first();
        if ($exist != null) {
            Alert::error('The options name already exist! Opt code: '.$exist->code);
            return false;
        }
        $quizoption->save();
        return $quizoption;
    }

    /**
     * @param QuizOption    $quizOption
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addChild(QuizOption $quizOption, Request $request)
    {
        $option = $this->_save($quizOption, $request);
        if ($option) {
            return redirect()->route('platform.quiz.option.child.edit', ['quiz_option_name' => $quizOption->name, 'quiz_option_id' => $quizOption->id]);
        }
    }
}

<?php

namespace App\Orchid\Screens\QuizOption;

use Orchid\Screen\Screen;
use App\Models\Quiz;
use App\Models\QuizOptionChild;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Group;
use App\Orchid\Layouts\Quiz\SubOptionListLayout;


class OptionChildEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Quiz Option Child';

    public $quiz_id;
    public $quiz_option_id;
    public $quiz_option_name;

    // construct
    public function __construct(Request $request) {
        $this->quiz_id = $request->get('quiz_id');
        $this->quiz_option_id = $request->get('quiz_option_id');
        $this->quiz_option_name = $request->get('quiz_option_name');
    }

    /**
     * Query data.
     *
     * @return array
     */
    public function query(QuizOptionChild $quizOptionChild): array
    {
        $this->exists = $quizOptionChild->exists;
        if($this->exists){
            $this->name = 'Edit "'.$this->quiz_option_name.'" Option Child';
        } else {
            $quizOptionChild->quiz_option_id = $this->quiz_option_id;
            $this->name = 'Create "'.$this->quiz_option_name.'" Option Child';
        }

        return [
            'quizOptionChild' => $quizOptionChild,
            'sub_options' => isset($quizOptionChild->sub_options) ? $quizOptionChild->sub_options : [],
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
        // $quiz = Quiz::find($this->quiz_id);
        // $combination = array();

        // if (!empty($quiz)) {
        //     $prevs = Quiz::where('status', 1)
        //         ->where('order', '<', $quiz->order)
        //         ->orderBy('order', 'asc')
        //         ->with(['options', 'options.optionChilds'])->get();

        //     foreach ($prevs as $key=>$prev) {
        //         $prevOpt = $prev->options;
        //         $options = array();
        //         foreach ($prevOpt as $opt) {
        //             $options[$opt->code] = $opt->name;
        //         }
        //         $comb = Select::make('subs[]')
        //             ->empty('No select', 0)
        //             ->help('Q'.($key+1))
        //             ->options($options);
        //         array_push($combination, $comb);
        //     }
        // }
        return [
            Layout::rows([

                Input::make('quizOptionChild.quiz_option_id')
                    ->title('Parent Option')
                    ->readonly(true),

                Input::make('quizOptionChild.name')
                    ->title('Child Option / Answer')
                    ->required(),

                Input::make('quizOptionChild.code')
                    ->title('Option Code')
                    ->type('number')
                    ->min(1)
                    ->required(),
                Select::make('quizOptionChild.status')
                    ->title("Status")
                    ->empty('Publish', 1)
                    ->options([
                        1 => 'Publish',
                        0  => 'Draft'
                    ])
                    ->required()
            ]),
            // Layout::rows([
            //     Group::make(
            //         $combination
            //     ),
            //     Button::make('Add')
            //         ->method('addSubOption')
            //         ->class('btn btn-success')
            // ])->title('Prev Options Combinations'),
            // SubOptionListLayout::class,
        ];
    }

    /**
     * @param QuizOptionChild    $quizOptionChild
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(QuizOptionChild $quizOptionChild, Request $request)
    {
        $this->_save($quizOptionChild, $request);
        Alert::info('You have successfully created an quiz option.');

        return redirect()->route('platform.quiz.option.edit', $quizOptionChild->quiz_option_id);
    }

    /**
     * @param QuizOptionChild $quizOptionChild
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(QuizOptionChild $quizOptionChild)
    {
        $quizOptionChild->delete();

        Alert::info('You have successfully deleted the quiz option.');

        return redirect()->route('platform.quiz.option.edit', $quizOptionChild->quiz_option_id);
    }

    private function _save(QuizOptionChild $quizOptionChild, Request $request)
    {
        $quizOptionChild->fill($request->get('quizOptionChild'));
        $quizOptionChild->save();
        return $quizOptionChild;
    }

    /**
     * @param QuizOption    $quizOptionChild
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addSubOption(QuizOptionChild $quizOptionChild, Request $request)
    {
        $quizOptionChild = $this->_save($quizOptionChild, $request);
        if ($quizOptionChild) {
            $subs = !empty($quizOptionChild->sub_options) ? $quizOptionChild->sub_options : array();
            $subs_add = $request->get('subs');
            if (count($subs_add) > 0) {
                array_push($subs, join(".",$subs_add));
                $quizOptionChild->sub_options = $subs;
                $quizOptionChild->save();
                Alert::info('You have successfully created an quiz option.');
            } else {
                Alert::error('Sub options can\'t be empty text!');
            }
        }
    }

    /**
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function removeSub($sub, QuizOptionChild $quizOptionChild)
    {
        $subs = !empty($quizOptionChild->sub_options) ? $quizOptionChild->sub_options : array();
        $key = array_search($sub, $subs);
        array_splice($subs, $key, 1);
        $quizOptionChild->sub_options = $subs;
        $quizOptionChild->save();
        Alert::info('You have successfully removed an quiz option.');
    }
}

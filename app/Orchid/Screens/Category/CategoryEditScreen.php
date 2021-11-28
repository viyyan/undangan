<?php

namespace App\Orchid\Screens\Category;

use Orchid\Screen\Screen;
use App\Models\Category;
use App\Models\Quiz;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Group;
use Illuminate\Http\Request;
use App\Orchid\Layouts\Quiz\SubOptionListLayout;


class CategoryEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Category';

    public $type = 'post';

    // construct
    public function __construct(Request $request) {
        $this->type = $request->get('type') ?  $request->get('type') : 'post';
    }

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Category $category): array
    {
        $this->exists = $category->exists;
        if($this->exists){
            $this->name = 'Edit Category';
            $this->type = $category->type;
        } else {
            $category->type = $this->type;
        }
        $this->name = ucwords($this->type).' '.$this->name;
        return [
            'category' => $category,
            'sub_options' => isset($category->quiz_answers) ? $category->quiz_answers : [],
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
        $combination = array();
        if ($this->type == 'research') {
            $quizzes = Quiz::where('status', 1)
                ->orderBy('order', 'asc')
                ->with(['options', 'options.optionChilds'])->get();

            foreach ($quizzes as $key=>$prev) {
                $prevOpt = $prev->options;
                $options = array();
                foreach ($prevOpt as $opt) {
                    if ($opt->has_children) {
                        foreach($opt->optionChilds as $child) {
                            $code = $opt->code.'-'.$child->code;
                            $name = $opt->name.' - '.$child->name;
                            $options[$code] = $name;
                        }
                    } else {
                        $options[$opt->code] = $opt->name;
                    }
                }
                $comb = Select::make('quiz_answers[]')
                    ->empty('No select', 0)
                    ->title('Q'.($key+1))
                    ->options($options);
                array_push($combination, $comb);
            }
        }
        $layout = [
            Layout::rows([
                Input::make('category.name')
                    ->title('Name')
                    ->placeholder('Category name')
                    ->required(),

                Input::make('category.type')
                    ->title('Type')
                    ->readonly(true),

                Select::make('category.status')
                    ->title("Status")
                    ->empty('Publish', 1)
                    ->options([
                        1 => 'Publish',
                        0  => 'Draft'
                    ])
                    ->required(),

                Input::make('category.order')
                    ->title("Order")
                    ->type("number")
                    ->min(1)
                    ->canSee($this->type == 'member')
            ]),
            Layout::rows([
                Group::make(
                    $combination
                ),
                Button::make('Add')
                    ->method('addQuizAnswer')
                    ->class('btn btn-success')
            ])->title('Quiz Answers')->canSee($this->type == 'research'),
        ];
        if ($this->type == 'research') {
            array_push($layout, SubOptionListLayout::class);
        }
        return $layout;
    }

    /**
     * @param Category    $category
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Category $category, Request $request)
    {
        $category = $this->_save($category, $request);

        Alert::info('You have successfully created an category.');

        return redirect()->route('platform.category.list', ['type' => $category->type]);
    }

    /**
     * @param Category $category
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Category $category)
    {
        $category->delete();

        Alert::info('You have successfully deleted the category.');

        return redirect()->route('platform.category.list', ['type' => $category->type]);
    }


    /**
     * @param AnswerCombination    $category
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addQuizAnswer(Category $category, Request $request)
    {
        $category = $this->_save($category, $request);
        $answers = !empty($category->quiz_answers) ? $category->quiz_answers : array();
        $quiz_answers = $request->get('quiz_answers');
        if (count($quiz_answers) > 0) {
            array_push($answers, join(".",$quiz_answers));
            $category->quiz_answers = $answers;
            $category->save();
            Alert::info('You have successfully added an quiz answers combination.');
        } else {
            Alert::error('Quiz answers can\'t be empty text!');
        }
        return redirect()->route('platform.category.edit', $category->id);
    }

    /**
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function removeSub($sub, Category $category)
    {
        $subs = !empty($category->quiz_answers) ? $category->quiz_answers : array();
        $subs = array_diff($subs, [$sub]);
        $category->quiz_answers = $subs;
        $category->save();
        Alert::info('You have successfully removed an quiz answer.');
    }


    private function _save(Category $category, Request $request)
    {
        $category->fill($request->get('category'));
        $category->save();
        return $category;
    }

}

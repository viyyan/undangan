<?php

namespace App\Orchid\Screens\Category;

use Orchid\Screen\Screen;
use App\Models\Category;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Illuminate\Http\Request;


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
            'category' => $category
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
        $orders = [];
        if ($this->type == 'investor') {
            $orders = range(1, (Category::where('type', 'investor')
                ->count() + 1));
        }
        return [
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
                Select::make('category.order')
                    ->title("Order")
                    ->empty('No select')
                    ->options($orders)
                    ->canSee(($this->type == 'investor'))
            ])
        ];
    }

    /**
     * @param Category    $category
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Category $category, Request $request)
    {
        $category->fill($request->get('category'));
        $category->save();

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

}

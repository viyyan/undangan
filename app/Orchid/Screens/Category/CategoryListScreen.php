<?php

namespace App\Orchid\Screens\Category;

use App\Orchid\Layouts\Category\CategoryListLayout;
use App\Models\Category;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;



class CategoryListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Categories';


    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All categories';

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
    public function query(): array
    {
        $this->name = ucwords($this->type).' '.$this->name;
        $categories = Category::where('type', $this->type)
                ->filters()
                ->orderBy('created_at', 'desc');
        if ($this->type == 'investor') {
            $categories->orderBy('order', 'asc');
        }
        return [
            'categories' => $categories->paginate()
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
                ->route('platform.category.edit', ['type' => $this->type])
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
            CategoryListLayout::class
        ];
    }

    /**
     * @return TD[]
     */
    private function remove(Category $category)
    {
        $category->delete();

        Alert::info('You have successfully deleted the category.');

        return redirect()->route('platform.category.list', ['type' => $this->type]);
    }


}

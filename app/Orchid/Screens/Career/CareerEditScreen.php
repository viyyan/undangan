<?php

namespace App\Orchid\Screens\Career;

use Orchid\Screen\Screen;
use App\Models\Career;
use App\Models\Category;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Textarea;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Select;

class CareerEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Position';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Career $career): array
    {
        $this->exists = $career->exists;

        if($this->exists){
            $this->name = 'Edit Position';
        }

        return [
            'career' => $career
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

                Input::make('career.title')
                    ->title('Title')
                    ->placeholder('Position Title')
                    ->required(),

                Select::make('career.status')
                    ->title("Status")
                    ->empty('Publish', 1)
                    ->options([
                        1 => 'Publish',
                        0  => 'Draft'
                    ])
                    ->required(),

                Relation::make('career.category_id')
                    ->title('Category')
                    ->fromModel(Category::class, 'name')
                    ->applyScope('career')
                    ->required(),

                Quill::make('career.requirements')
                    ->title('Requirements'),

                Quill::make('career.responsibilities')
                    ->title('Responsibilities'),

                Input::make('career.email_to')
                    ->title('Email to')
                    ->type('email')
                    ->placeholder('HR email address')
                    ->required(),

            ])
        ];
    }


    /**
     * @param Career    $career
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Career $career, Request $request)
    {

        $career->fill($request->get('career'));
        if (isset($career->linkedin_url) && filter_var($career->linkedin_url, FILTER_VALIDATE_URL) === FALSE) {
            $career->linkedin_url = "https://".$career->linkedin_url;
        }
        $career->save();

        Alert::info('You have successfully created an career.');

        return redirect()->route('platform.career.list');
    }

    /**
     * @param Career $career
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Career $career)
    {
        $career->delete();

        Alert::info('You have successfully deleted the career.');

        return redirect()->route('platform.career.list');
    }
}

<?php

namespace App\Orchid\Screens\Investor;

use Orchid\Screen\Screen;
use App\Models\Investor;
use App\Models\Category;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Select;
use Carbon\Carbon;
use Orchid\Screen\Fields\Cropper;


class InvestorEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Investor Content';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Investor $investor): array
    {
        $this->exists = $investor->exists;

        if($this->exists){
            $this->name = 'Edit Investor';
        }

        $investor->load('attachment');

        return [
            'investor' => $investor
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
        $current = date("Y");
        $years = [];
        for($i = $current; $i > ($current - 10); $i--) {
            $years[$i] = strval($i);
        }

        return [
            Layout::rows([

                Input::make('investor.title')
                    ->title('Title')
                    ->placeholder('Investor Title')
                    ->required(),

                Select::make('investor.status')
                    ->title("Status")
                    ->empty('Publish', 1)
                    ->options([
                        1 => 'Publish',
                        0  => 'Draft'
                    ])
                    ->required(),

                Relation::make('investor.category_id')
                    ->title('Category')
                    ->fromModel(Category::class, 'name')
                    ->applyScope('investor')
                    ->required(),

                Upload::make('investor.pdf_id')
                    ->acceptedFiles('application/pdf')
                    ->maxFiles(1)
                    ->help('Set if investor report format is pdf')
                    ->groups('documents'),

                Quill::make('investor.content')
                    ->title('Text Content')
                    ->help('Set if investor report format is article'),

                DateTimer::make('investor.created_at')
                    ->title('Published Date')
                    ->format('Y-m-d'),

                Select::make('investor.group_year')
                    ->title("Group of Year")
                    ->options($years)
                    ->empty("No select")
                    ->help('Set if only you need group contents by year')
            ])
        ];
    }


    /**
     * @param Investor    $investor
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Investor $investor, Request $request)
    {

        $investor->fill($request->get('investor'));
        // var_dump($investor); exit();
        if (isset($investor->pdf_id)) $investor->pdf_id = $investor->pdf_id[0];
        if (empty($investor->created_at)) $investor->created_at = Carbon::now();
        $investor->save();

        $investor->attachment()->syncWithoutDetaching(
            $request->input('investor.attachment', [])
        );

        Alert::info('You have successfully created an investor.');

        return redirect()->route('platform.investor.list');
    }

    /**
     * @param Investor $investor
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Investor $investor)
    {
        $investor->delete();
        $investor->attachment->each->delete();

        Alert::info('You have successfully deleted the investor.');

        return redirect()->route('platform.investor.list');
    }
}

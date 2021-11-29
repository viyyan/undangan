<?php

namespace App\Orchid\Screens\CaseStudy;

use Orchid\Screen\Screen;
use App\Models\CaseStudy;
use App\Models\Category;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Select;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class CaseStudyEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create CaseStudy';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(CaseStudy $caseStudy): array
    {
        $this->exists = $caseStudy->exists;

        if($this->exists){
            $this->name = 'Edit CaseStudy';
        }

        $caseStudy->load('attachment');

        return [
            'caseStudy' => $caseStudy
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

                Input::make('caseStudy.title')
                    ->title('Title')
                    ->placeholder('Set title')
                    ->help('Specify a short descriptive title for this caseStudy.')
                    ->required(),

                Select::make('caseStudy.status')
                    ->title("Status")
                    ->empty('Publish', 1)
                    ->options([
                        1 => 'Publish',
                        0  => 'Draft'
                    ])
                    ->required(),

                CheckBox::make('caseStudy.featured')
                    ->title("Featured")
                    ->sendTrueOrFalse(),

                Relation::make('caseStudy.cat_industry_id')
                    ->title('Industry')
                    ->fromModel(Category::class, 'name')
                    ->applyScope('industry')
                    ->required(),

                Relation::make('caseStudy.cat_research_ids')
                    ->title('Researches')
                    ->fromModel(Category::class, 'name')
                    ->multiple()
                    ->applyScope('research')
                    ->required(),

                Cropper::make('caseStudy.hero_id')
                    ->targetId()
                    ->title('Large web banner image, generally in the front and center')
                    ->width(1000)
                    ->height(610),

                Quill::make('caseStudy.objective')
                    ->title('Objective'),

                Quill::make('caseStudy.approach')
                    ->title('Approach'),

                Quill::make('caseStudy.result')
                    ->title('Result'),

                Quill::make('caseStudy.recommendation')
                    ->title('Recommendation'),

                Input::make('caseStudy.tools')
                    ->title('Tools'),

                DateTimer::make('caseStudy.created_at')
                    ->title('CaseStudy post Date')
                    ->format('Y-m-d')

            ])
        ];
    }

    /**
     * @param CaseStudy    $caseStudy
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(CaseStudy $caseStudy, Request $request)
    {
        $caseStudy->fill($request->get('caseStudy'));
        if (empty($caseStudy->created_at)) $caseStudy->created_at = Carbon::now();
        $caseStudy->save();

        $caseStudy->attachment()->syncWithoutDetaching(
            $request->input('caseStudy.attachment', [])
        );
        // $this->_makeThumbnail($caseStudy);

        Alert::info('You have successfully created an caseStudy.');

        return redirect()->route('platform.case-study.list');
    }

    /**
     * @param CaseStudy $caseStudy
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(CaseStudy $caseStudy)
    {
        $caseStudy->delete();
        $caseStudy->attachment->each->delete();
        File::delete($caseStudy->heroThumbPath());

        Alert::info('You have successfully deleted the caseStudy.');

        return redirect()->route('platform.case-study.list');
    }

    private function _makeThumbnail(CaseStudy $caseStudy)
    {
        if ($image = $caseStudy->heroImage()->first()) {
            $thumbPath = $caseStudy->heroThumbPath();
            $file = Image::make($image->url())->crop(530, 610)->encode($image->extension);
            Storage::put($thumbPath, $file);
        }
    }
}

<?php

namespace App\Orchid\Screens\CaseStudy;

use Orchid\Screen\Screen;
use App\Models\CaseStudy;
use App\Models\User;
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

                Relation::make('caseStudy.category_id')
                    ->title('Category')
                    ->fromModel(Category::class, 'name')
                    ->applyScope('caseStudy')
                    ->required(),

                Cropper::make('caseStudy.hero_id')
                    ->targetId()
                    ->title('Large web banner image, generally in the front and center')
                    ->width(1000)
                    ->height(610),

                Relation::make('caseStudy.author_id')
                    ->title('Author')
                    ->fromModel(User::class, 'name')
                    ->required(),

                TextArea::make('caseStudy.excerpt')
                    ->title('Excerpt')
                    ->rows(3)
                    ->maxlength(200)
                    ->placeholder('Brief excerpt for preview'),

                Input::make('caseStudy.sub_title_1')
                    ->title('Sub Title Content 1')
                    ->placeholder('Challange'),

                Quill::make('caseStudy.sub_content_1')
                    ->title('Body Content 1'),

                Input::make('caseStudy.sub_title_2')
                    ->title('Sub Title Content 2')
                    ->placeholder('Bussines Issue'),

                Quill::make('caseStudy.sub_content_2')
                    ->title('Body Content 2'),

                Input::make('caseStudy.sub_title_2')
                    ->title('Sub Title Content 2')
                    ->placeholder('Approach'),

                Quill::make('caseStudy.sub_content_3')
                    ->title('Body Content 3'),

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
        $this->_makeThumbnail($caseStudy);

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

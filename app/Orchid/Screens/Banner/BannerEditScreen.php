<?php

namespace App\Orchid\Screens\Banner;

use Orchid\Screen\Screen;
use App\Models\Banner;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Select;


class BannerEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Banner';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Banner $banner): array
    {
        $this->exists = $banner->exists;

        if($this->exists){
            $this->name = 'Edit Banner';
        }

        $banner->load('attachment');

        return [
            'banner' => $banner
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
        $orders = range(1, (Banner::count() + 1));
        return [
            Layout::rows([
                Input::make('banner.title')
                    ->title('Title')
                    ->placeholder('Attractive banner title')
                    ->required(),

                TextArea::make('banner.subtitle')
                    ->title('Subtitle')
                    ->rows(2)
                    ->maxlength(200)
                    ->placeholder('Banner subtitle'),

                Cropper::make('banner.hero_id')
                    ->targetId()
                    ->title('Large banner image 1280x740px')
                    ->width(456)
                    ->height(400)
                    ->required(),

                Cropper::make('banner.logo_id')
                    ->targetId()
                    ->title('Add on logo 300x50px *optional'),

                Input::make('banner.button_title')
                    ->title('Button Text')
                    ->placeholder('Klik di sini'),

                Input::make('banner.url')
                    ->title('URL')
                    ->placeholder('https://'),

                Select::make('banner.order')
                    ->title("Order")
                    ->empty(count($orders), count($orders))
                    ->options($orders)
                    ->required(),

                Select::make('banner.status')
                    ->title("Status")
                    ->empty('Publish', 1)
                    ->options([
                        1 => 'Publish',
                        0  => 'Draft'
                    ])
                    ->required(),

            ])
        ];
    }

    /**
     * @param Banner    $banner
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Banner $banner, Request $request)
    {
        $banner->fill($request->get('banner'));
        if (isset($banner->url) && filter_var($banner->url, FILTER_VALIDATE_URL) === FALSE) {
            $banner->url = "https://".$banner->url;
        }
        $banner->save();

        $banner->attachment()->syncWithoutDetaching(
            $request->input('banner.attachment', [])
        );

        Alert::info('You have successfully created an banner.');

        return redirect()->route('platform.banner.list');
    }

    /**
     * @param Banner $banner
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Banner $banner)
    {
        $banner->delete();

        Alert::info('You have successfully deleted the banner.');

        return redirect()->route('platform.banner.list');
    }
}

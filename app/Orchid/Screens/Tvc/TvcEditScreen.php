<?php

namespace App\Orchid\Screens\Tvc;

use Orchid\Screen\Screen;
use App\Models\Tvc;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Alert;

class TvcEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Tvc';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Tvc $tvc): array
    {
        $this->exists = $tvc->exists;
        if($this->exists){
            $this->name = 'Edit Tvc';
        }
        return [
            'tvc' => $tvc,
            'youtubeUrl' => $tvc->youtubeUrl
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
        $ordersHighlight = range(1, (Tvc::where("highlight", "!=", null)->count() + 1));
        return [
            Layout::rows([

                Input::make('tvc.title')
                    ->title('Title')
                    ->placeholder('TVC title')
                    ->required(),

                Select::make('tvc.status')
                    ->title('Status')
                    ->empty('Publish', 1)
                    ->options([
                        1 => 'Publish',
                        0  => 'Draft'
                    ])
                    ->required(),

                Input::make('tvc.subtitle')
                    ->title('Subtitle')
                    ->placeholder('TVC subtitle'),

                Input::make('youtubeUrl')
                    ->title('Youtube URL')
                    ->placeholder('Youtube URL')
                    ->required(),

                TextArea::make('tvc.desc')
                    ->title('TVC description')
                    ->rows(6)
                    ->maxlength(800)
                    ->placeholder('TVC description')
                    ->required(),

                Select::make('tvc.highlight')
                    ->title("Highlight Order on Homepage")
                    ->empty("No select")
                    ->options($ordersHighlight)
                    ->help("Set the highlight order if you want to show the tvc on homepage"),

            ]),
        ];
    }

    /**
     * @param Tvc    $tvc
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Tvc $tvc, Request $request)
    {
        $tvc->fill($request->get('tvc'));

        $youtube_id = $this->_getYoutubeId($request->get('youtubeUrl'));
        if (isset($youtube_id)) {
            $tvc->youtube_id = $youtube_id;
            $tvc->save();
            Alert::info('You have successfully created an tvc.');
            return redirect()->route('platform.tvc.list');
        } else {
            Alert::error('Please provide a valid youtube url');
        }
    }

    /**
     * @param Tvc $tvc
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Tvc $tvc)
    {
        $tvc->delete();
        $tvc->attachment->each->delete();
        Alert::info('You have successfully deleted the tvc.');
        return redirect()->route('platform.tvc.list');
    }


    private function _getYoutubeId(string $url)
    {
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $matches);
        if (count($matches) > 1) {
            return $matches[1];
        } else {
            null;
        }
    }

}

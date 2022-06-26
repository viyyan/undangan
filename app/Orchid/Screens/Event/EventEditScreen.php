<?php

namespace App\Orchid\Screens\Event;

use Orchid\Screen\Screen;
use App\Models\Event;
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



class EventEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Event';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Event $event): array
    {
        $this->exists = $event->exists;

        if($this->exists){
            $this->name = 'Edit Event';
        }

        $event->load('attachment');

        return [
            'event' => $event
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

                Input::make('event.name')
                    ->title('Name')
                    ->placeholder('Event Name')
                    ->help('Specify a short descriptive name for this event.')
                    ->required(),

                // Relation::make('event.category_id')
                //     ->title('Category')
                //     ->fromModel(Category::class, 'name')
                //     ->applyScope('event')
                //     ->required(),


                Cropper::make('event.hero_id')
                    ->targetId()
                    ->title('Large web banner image, generally in the front and center'),

                Cropper::make('event.sub_hero_id')
                    ->targetId()
                    ->title('Large web banner image, generally in the front and center'),

                Relation::make('event.user_id')
                    ->title('Author')
                    ->fromModel(User::class, 'name')
                    ->required(),

                Input::make('event.bride')
                    ->title('Bride Name')
                    ->placeholder('Bride Name')
                    ->required(),

                TextArea::make('event.bride_desc')
                    ->title('Bride Desc')
                    ->rows(2)
                    ->maxlength(200)
                    ->placeholder('Putri dari Bapak & Ibu...'),

                Input::make('event.groom')
                    ->title('Groom Name')
                    ->placeholder('Groom Name')
                    ->required(),

                TextArea::make('event.bride_desc')
                    ->title('Groom Desc')
                    ->rows(2)
                    ->maxlength(200)
                    ->placeholder('Putra dari Bapak & Ibu...'),

                DateTimer::make('event.event_date')
                    ->title('Event Date')
                    ->format('Y-m-d'),

                Input::make('event.venue')
                    ->title('Venue')
                    ->placeholder('Venue')
                    ->required(),

                TextArea::make('event.venue_address')
                    ->title('Venue Address')
                    ->rows(2)
                    ->maxlength(200),

                Input::make('event.city')
                    ->title('City')
                    ->placeholder('City'),

                Input::make('event.latitude')
                    ->title('Latitude')
                    ->placeholder('Latitude'),

                Input::make('event.longitude')
                    ->title('Longitude')
                    ->placeholder('Longitude'),

                Select::make('event.type')
                    ->title("Type")
                    ->empty('Wedding', 1)
                    ->options([
                        1 => 'Wedding'
                    ])
                    ->required(),


                Select::make('event.status')
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
     * @param Event    $event
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Event $event, Request $request)
    {
        $event->fill($request->get('event'));
        if (empty($event->created_at)) $event->created_at = Carbon::now();
        $event->save();

        $event->attachment()->syncWithoutDetaching(
            $request->input('event.attachment', [])
        );

        // $this->_makeThumbnail($event);

        Alert::info('You have successfully created an event.');

        return redirect()->route('platform.event.list');
    }

    /**
     * @param Event $event
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Event $event)
    {
        $event->delete();
        $event->attachment->each->delete();
        File::delete($event->heroThumbPath());

        Alert::info('You have successfully deleted the event.');

        return redirect()->route('platform.event.list');
    }

    private function _makeThumbnail(Event $event)
    {
        if ($image = $event->heroImage()->first()) {
            $thumbPath = $event->heroThumbPath();
            $file = Image::make($image->url())->crop(530, 610)->encode($image->extension);
            Storage::put($thumbPath, $file);
        }
    }
}

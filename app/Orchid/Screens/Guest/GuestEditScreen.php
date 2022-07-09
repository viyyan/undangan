<?php

namespace App\Orchid\Screens\Guest;

use Orchid\Screen\Screen;
use App\Models\Guest;
use App\Models\User;
use App\Models\Event;
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
use App\Helpers\Template;



class GuestEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Guest';

    // construct
    public function __construct(Request $request) {
        $this->event_id = $request->get('event_id');
        $this->name = $request->get('name') . " $this->name";
    }

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Guest $guest): array
    {
        $this->exists = $guest->exists;

        if($this->exists){
            $this->name = 'Edit Guest';
        } else {
            $guest->event_id = $this->event_id;
        }
        return [
            'guest' => $guest
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

                Input::make('guest.name')
                    ->title('Name')
                    ->placeholder('Name')
                    ->required(),

                Select::make('guest.type')
                    ->title("Type")
                    ->empty('Invitees', 1)
                    ->options([
                        1 => 'Invitees',
                        2 => 'Friends Gift',
                        3 => 'Colleague'
                    ])
                    ->required(),

                Select::make('guest.from')
                    ->title("Guest From")
                    ->empty('Tyas', 'Tyas')
                    ->options([
                        'Tyas' => 'Tyas',
                        'Fian' => 'Fian',
                    ])
                    ->required(),


                Input::make('guest.phone')
                    ->title('Phone'),

                // Input::make('guest.email')
                //     ->title('Email'),

                Input::make('guest.total_guests')
                    ->type('number')
                    ->title('Total Guests'),


                TextArea::make('guest.address')
                    ->title('Address')
                    ->rows(3)
                    ->maxlength(300),

                // Input::make('guest.city')
                //     ->title('City')
                //     ->placeholder('City'),


                CheckBox::make('guest.confirmed')
                    ->title("Confirmed")
                    ->sendTrueOrFalse(),

                Select::make('guest.status')
                    ->title("Status")
                    ->empty('Created', 1 )
                    ->options([
                        1 => 'Created',
                        2 => 'Sent',
                        3 => 'Submited',
                    ])
                    ->required(),

                Relation::make('guest.event_id')
                    ->title('Event')
                    ->fromModel(Event::class, 'name')
                    ->required()
                    ->readOnly(),

            ])
        ];
    }

    /**
     * @param Guest    $guest
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Guest $guest, Request $request)
    {
        $guest->fill($request->get('guest'));
        if (empty($guest->created_at)) $guest->created_at = Carbon::now();
        $guest->save();


        Alert::info('You have successfully created a guest.');

        return redirect()->route('platform.guest.list', getEventParams($guest->event));
    }

    /**
     * @param Guest $guest
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Guest $guest)
    {
        $guest->delete();

        Alert::info('You have successfully deleted the guest.');

        return redirect()->route('platform.guest.list', getEventParams($guest->event));
    }

}

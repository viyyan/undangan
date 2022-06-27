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



class GuestEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Guest';

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

                Relation::make('guest.event_id')
                    ->title('Event')
                    ->fromModel(Event::class, 'name')
                    ->required(),

                Input::make('guest.name')
                    ->title('Name')
                    ->placeholder('Name')
                    ->required(),

                Input::make('guest.phone')
                    ->title('Phone'),

                Input::make('guest.email')
                    ->title('email'),

                Input::make('guest.total_guests')
                    ->type('number')
                    ->title('Total Guests'),

                CheckBox::make('guest.confirmed')
                    ->title("Confirmed")
                    ->sendTrueOrFalse(),

                Select::make('guest.type')
                    ->title("Type")
                    ->empty('Invitees', 1)
                    ->options([
                        1 => 'Invitees',
                        2 => 'Friends Gift',
                        3 => 'colleague'
                    ])
                    ->required(),


                TextArea::make('guest.address')
                    ->title('Address')
                    ->rows(3)
                    ->maxlength(300),

                Input::make('guest.city')
                    ->title('City')
                    ->placeholder('City'),

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

        // $this->_makeThumbnail($guest);

        Alert::info('You have successfully created an guest.');

        return redirect()->route('platform.guest.list');
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
        File::delete($guest->heroThumbPath());

        Alert::info('You have successfully deleted the guest.');

        return redirect()->route('platform.guest.list');
    }

    private function _makeThumbnail(Guest $guest)
    {
        if ($image = $guest->heroImage()->first()) {
            $thumbPath = $guest->heroThumbPath();
            $file = Image::make($image->url())->crop(530, 610)->encode($image->extension);
            Storage::put($thumbPath, $file);
        }
    }
}

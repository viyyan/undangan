<?php

namespace App\Orchid\Screens\Store;

use Orchid\Screen\Screen;
use App\Models\Store;
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

class StoreEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Store';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Store $store): array
    {
        $this->exists = $store->exists;
        $this->order = $store->order;

        if($this->exists){
            $this->name = 'Edit Store';
        }

        return [
            'store' => $store
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
        $orders = range(1, (Store::count() + 1));

        if ($this->order != null) {
            $order = $this->order;
        } else {
            $order = count($orders);
        }
        return [
            Layout::rows([
                Input::make('store.name')
                    ->title('Name')
                    ->placeholder('Store Name')
                    ->required(),

                TextArea::make('store.address')
                    ->title('Address')
                    ->rows(2)
                    ->maxlength(200)
                    ->placeholder('Address'),

                Input::make('store.lat')
                    ->title('Lattitude')
                    ->placeholder('0,000'),

                Input::make('store.lng')
                    ->title('Longitude')
                    ->placeholder('0,000'),

                Input::make('store.phone')
                    ->type('phone')
                    ->title('Phone')
                    ->placeholder('+62 9292 9292'),

                Select::make('store.order')
                    ->title("Order")
                    ->empty($order, $order)
                    ->options($orders)
                    ->required(),

            ])
        ];
    }

    /**
     * @param Store    $store
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Store $store, Request $request)
    {
        $store->fill($request->get('store'));
        if (isset($store->url) && filter_var($store->url, FILTER_VALIDATE_URL) === FALSE) {
            $store->url = "https://".$store->url;
        }
        $store->save();

        Alert::info('You have successfully created an store.');

        return redirect()->route('platform.store.list');
    }

    /**
     * @param Store $store
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Store $store)
    {
        $store->delete();

        Alert::info('You have successfully deleted the store.');

        return redirect()->route('platform.store.list');
    }
}

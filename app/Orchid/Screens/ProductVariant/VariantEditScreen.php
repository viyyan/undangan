<?php

namespace App\Orchid\Screens\ProductVariant;

use Orchid\Screen\Screen;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Alert;

class VariantEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Add Variant';


    public $product_id;

    // construct
    public function __construct(Request $request) {
        $this->product_id = $request->get('product_id');
    }

    /**
     * Query data.
     *
     * @return array
     */
    public function query(ProductVariant $variant): array
    {
        $this->exists = $variant->exists;
        if($this->exists){
            $this->name = 'Edit Variant';
        } else {
            $variant->product_id = $this->product_id;
        }

        $variant->load('attachment');

        return [
            'variant' => $variant
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
        $orders = range(1, (
            ProductVariant::where("product_id", $this->product_id)->where("order", "!=", null)->count() + 1));
        return [
            Layout::rows([

                Input::make('variant.name')
                    ->title('Name')
                    ->placeholder('Variant name')
                    ->required(),

                Cropper::make('variant.image_id')
                    ->targetId()
                    ->title('Variant image')
                    ->width(420)
                    ->height(304)
                    ->required(),

                Input::make('variant.subtitle')
                    ->title('Subtitle')
                    ->placeholder('Variant subtitle'),

                TextArea::make('variant.desc')
                    ->title('About the Variant')
                    ->rows(6)
                    ->maxlength(800)
                    ->placeholder('Variant description')
                    ->required(),

                Input::make('variant.product_id')
                    ->title('Product')
                    ->readonly(true),

                TextArea::make('variant.category')
                    ->title('Category')
                    ->rows(2)
                    ->maxlength(255)
                    ->placeholder('Variant category'),

                TextArea::make('variant.packaging')
                    ->title('Packaging')
                    ->rows(2)
                    ->maxlength(255)
                    ->placeholder('Variant packaging'),

                Quill::make('variant.composition')
                    ->title('Composition')
                    ->toolbar(["text", "list"])
                    ->maxlength(1000)
                    ->placeholder('Variant composition'),

                Quill::make('variant.dose_usage')
                    ->title('Dose Usage')
                    ->toolbar(["text", "list"])
                    ->maxlength(1000)
                    ->placeholder('Variant dose usage'),

                TextArea::make('variant.note')
                    ->title('Note')
                    ->rows(2)
                    ->maxlength(255)
                    ->placeholder('Variant note'),
                
                Select::make('variant.order')
                    ->title("Product Variant Order")
                    ->empty(count($orders), count($orders))
                    ->options($orders),

            ])
        ];
    }

    /**
     * @param Variant    $variant
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(ProductVariant $variant, Request $request)
    {
        $variant->fill($request->get('variant'));
        $variant->save();

        $variant->attachment()->syncWithoutDetaching(
            $request->input('variant.attachment', [])
        );

        Alert::info('You have successfully created an variant.');

        return redirect()->route('platform.product.edit', $variant->product_id);
    }

    /**
     * @param Variant $variant
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(ProductVariant $variant)
    {
        $variant->delete();
        $variant->attachment->each->delete();

        Alert::info('You have successfully deleted the variant.');

        return redirect()->route('platform.product.edit', $variant->product_id);
    }
}

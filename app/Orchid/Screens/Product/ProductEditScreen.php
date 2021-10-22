<?php

namespace App\Orchid\Screens\Product;

use Orchid\Screen\Screen;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tvc;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
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
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use App\Orchid\Layouts\ProductVariant\VariantListLayout;
use Orchid\Screen\TD;
use App\Orchid\Layouts\Tvc\TvcListLayout;



class ProductEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Product';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Product $product): array
    {
        $this->exists = $product->exists;
        if($this->exists){
            $this->name = 'Edit Product';
        }

        $product->load('attachment');

        return [
            'product' => $product,
            'variants' => $product->variants,
            'tvcs' => $product->tvcs,
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
        $ordersHighlight = range(1, (Product::where("highlight", "!=", null)->count() + 1));
        $orders = range(1, (Product::where("order", "!=", null)->count() + 1));
        return [
            Layout::rows([

                Input::make('product.name')
                    ->title('Name')
                    ->placeholder('Product name')
                    ->required(),

                Select::make('product.status')
                    ->title("Status")
                    ->empty('Draft', 0)
                    ->options([
                        1 => 'Publish',
                        0  => 'Draft'
                    ])
                    ->required(),

                Relation::make('product.category_id')
                    ->title('Category')
                    ->fromModel(Category::class, 'name')
                    ->applyScope('product')
                    ->required(),

                Cropper::make('product.hero_id')
                    ->targetId()
                    ->title('Large web banner image, generally in the front and center')
                    ->width(1000)
                    ->height(610),

                Cropper::make('product.image_id')
                    ->targetId()
                    ->title('Product image')
                    ->width(800)
                    ->height(800)
                    ->required(),

                Input::make('product.subtitle')
                    ->title('Subtitle')
                    ->placeholder('Product subtitle')
                    ->required(),

                TextArea::make('product.desc')
                    ->title('About the Product')
                    ->rows(6)
                    ->maxlength(800)
                    ->placeholder('Product description')
                    ->required(),

                CheckBox::make('product.is_halal')
                    ->title("Halal Certified")
                    ->sendTrueOrFalse(),

                Group::make([
                    Input::make('product.facebook_name')
                        ->title('Facebook Name')
                        ->placeholder('Enter facebook name'),

                    Input::make('product.facebook_url')
                        ->title('Facebook URL')
                        ->placeholder('Enter facebook URL')
                ]),

                Group::make([
                    Input::make('product.instagram_name')
                        ->title('Instagram Username')
                        ->placeholder('Enter instagram name'),

                    Input::make('product.instagram_url')
                        ->title('Instagram URL')
                        ->placeholder('Enter instagram URL')
                ]),

                Select::make('product.highlight')
                    ->title("Highlight Order on Homepage")
                    ->empty("No select")
                    ->options($ordersHighlight)
                    ->help("Set the highlight order if you want to show the product on homepage"),

                Select::make('product.order')
                    ->title("Order on Products List")
                    ->empty("No select")
                    ->options($orders)
                    ->help("Set the order on products list"),
            ]),
            Layout::rows([
                Button::make('Add Variant')
                    ->icon('plus')
                    ->method('addVariant')
                    ->class('btn btn-primary'),
            ])->title('Product Variants'),
            VariantListLayout::class,

            Layout::rows([
                Relation::make('product.tvc_ids')
                    ->title('TVC')
                    ->multiple()
                    ->fromModel(Tvc::class, 'title'),
            ])->title('Product TVCs'),
            TvcListLayout::class,
        ];
    }

    /**
     * @param Product    $product
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Product $product, Request $request)
    {
        $this->_saveProduct($product, $request);
        Alert::info('You have successfully created an product.');
        return redirect()->route('platform.product.list');
    }

    /**
     * @param Product $product
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Product $product)
    {
        $product->delete();
        $product->attachment->each->delete();

        Alert::info('You have successfully deleted the product.');

        return redirect()->route('platform.product.list');
    }


    /**
     * @param Product    $product
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addVariant(Product $product, Request $request)
    {
        $prod = $this->_saveProduct($product, $request);
        return redirect()->route('platform.variant.edit', ['product_id' => $prod->id]);
    }


    private function _saveProduct(Product $product, Request $request)
    {
        $product->fill($request->get('product'));
        if (isset($product->facebook_url) && filter_var($product->facebook_url, FILTER_VALIDATE_URL) === FALSE) {
            $product->facebook_url = "https://".$product->facebook_url;
        }
        if (isset($product->instagram_url) && filter_var($product->instagram_url, FILTER_VALIDATE_URL) === FALSE) {
            $product->instagram_url = "https://".$product->instagram_url;
        }
        $product->save();

        $product->attachment()->syncWithoutDetaching(
            $request->input('product.attachment', [])
        );
        return $product;
    }

    /**
     * @param Product    $product
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addTvc(Product $product, Request $request)
    {
        $prod = $this->_saveProduct($product, $request);
        return redirect()->route('platform.variant.edit', ['product_id' => $prod->id]);
    }

}

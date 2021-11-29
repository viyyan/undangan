<?php

namespace App\Orchid\Screens\Post;

use Orchid\Screen\Screen;
use App\Models\Post;
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



class PostEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Post';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Post $post): array
    {
        $this->exists = $post->exists;

        if($this->exists){
            $this->name = 'Edit Post';
        }

        $post->load('attachment');

        return [
            'post' => $post
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

                Input::make('post.title')
                    ->title('Title')
                    ->placeholder('Set title')
                    ->help('Specify a short descriptive title for this post.')
                    ->required(),

                Select::make('post.status')
                    ->title("Status")
                    ->empty('Publish', 1)
                    ->options([
                        1 => 'Publish',
                        0  => 'Draft'
                    ])
                    ->required(),

                CheckBox::make('post.featured')
                    ->title("Featured")
                    ->sendTrueOrFalse(),

                Cropper::make('post.hero_id')
                    ->targetId()
                    ->title('Large web banner image, generally in the front and center')
                    ->width(1000)
                    ->height(610),

                Relation::make('post.author_id')
                    ->title('Author')
                    ->fromModel(User::class, 'name')
                    ->required(),

                TextArea::make('post.excerpt')
                    ->title('Excerpt')
                    ->rows(3)
                    ->maxlength(200)
                    ->placeholder('Brief excerpt for preview'),

                Quill::make('post.body')
                    ->title('Main text'),

                DateTimer::make('post.created_at')
                    ->title('Post Date')
                    ->format('Y-m-d')

            ])
        ];
    }

    /**
     * @param Post    $post
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Post $post, Request $request)
    {
        $post->fill($request->get('post'));
        if (empty($post->created_at)) $post->created_at = Carbon::now();
        $post->save();

        $post->attachment()->syncWithoutDetaching(
            $request->input('post.attachment', [])
        );

        // $this->_makeThumbnail($post);

        Alert::info('You have successfully created an post.');

        return redirect()->route('platform.post.list');
    }

    /**
     * @param Post $post
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Post $post)
    {
        $post->delete();
        $post->attachment->each->delete();
        File::delete($post->heroThumbPath());

        Alert::info('You have successfully deleted the post.');

        return redirect()->route('platform.post.list');
    }

    private function _makeThumbnail(Post $post)
    {
        if ($image = $post->heroImage()->first()) {
            $thumbPath = $post->heroThumbPath();
            $file = Image::make($image->url())->crop(530, 610)->encode($image->extension);
            Storage::put($thumbPath, $file);
        }
    }
}

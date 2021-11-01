<?php

namespace App\Orchid\Screens\Member;

use Orchid\Screen\Screen;
use App\Models\Member;
use App\Models\Category;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Select;

class MemberEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create Member';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Member $member): array
    {
        $this->exists = $member->exists;

        if($this->exists){
            $this->name = 'Edit Member';
        }

        $member->load('attachment');

        return [
            'member' => $member
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

                Input::make('member.name')
                    ->title('Name')
                    ->placeholder('Member name')
                    ->required(),

                Cropper::make('member.photo_id')
                    ->targetId()
                    ->title('Photo member')
                    ->width(640)
                    ->height(640),

                Relation::make('member.category_id')
                    ->title('Member level / category')
                    ->fromModel(Category::class, 'name')
                    ->applyScope('member')
                    ->required(),

                Input::make('member.title')
                    ->title('Title')
                    ->placeholder('Member title')
                    ->required(),

                Textarea::make('member.quote')
                    ->title('Quote / Desc')
                    ->rows(3)
                    ->maxlength(255)
                    ->placeholder('Member quote / desc'),

                Input::make('member.linkedin_url')
                    ->title('Linkedin Profile URL')
                    ->placeholder('https://linkedin.com/{username}'),

                Input::make('member.order')
                    ->title("Order")
                    ->type("number")
                    ->min(1),

                Select::make('member.status')
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
     * @param Member    $member
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Member $member, Request $request)
    {
        $member->fill($request->get('member'));
        if (isset($member->linkedin_url)) {
            $member->linkedin_url = validateUrl($member->linkedin_url);
        }
        $member->save();

        $member->attachment()->syncWithoutDetaching(
            $request->input('member.attachment', [])
        );

        Alert::info('You have successfully created an member.');

        return redirect()->route('platform.member.list');
    }

    /**
     * @param Member $member
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Member $member)
    {
        $member->delete();
        $member->attachment->each->delete();

        Alert::info('You have successfully deleted the member.');

        return redirect()->route('platform.member.list');
    }
}

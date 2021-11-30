<?php

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [

            Menu::make('Our Thinking')
                ->icon('book-open')
                ->list([
                    Menu::make('All Posts')->route('platform.post.list'),
                    // Menu::make('Categories')->route('platform.category.list', ['type' => 'post']),
                ])
                ->title('Content'),

            Menu::make('Team')
                ->icon('friends')
                ->list([
                    Menu::make('All Members')->route('platform.member.list'),
                    Menu::make('Level')->route('platform.category.list', 'member'),
                ]),

            Menu::make('Case Studies')
                ->icon('folder-alt')
                ->list([
                    Menu::make('All Case Studies')->route('platform.case-study.list'),
                    Menu::make('Type of Industries')->route('platform.category.list', 'industry'),
                    Menu::make('Type of Researches')->route('platform.category.list', 'research'),
                ]),

            Menu::make('Market Research')
                ->icon('magnifier-add')
                ->list([
                    Menu::make('All Question')->route('platform.quiz.list'),
                    Menu::make('All Participants')->route('platform.participant.list'),
                ]),

            Menu::make('Job List')
                ->icon('people')
                ->list([
                    Menu::make('All Positions')->route('platform.career.list'),
                    Menu::make('Categories')->route('platform.category.list', ['type' => 'career']),
                ])
                ->title('Careers'),

            Menu::make(__('Users'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access rights')),

            Menu::make(__('Roles'))
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            Menu::make('Profile')
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }

    /**
     * @return string[]
     */
    public function registerSearchModels(): array
    {
        return [
            // ...Models
            // \App\Models\User::class
        ];
    }
}

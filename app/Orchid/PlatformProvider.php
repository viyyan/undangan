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
            Menu::make('Banners')
                ->icon('barcode')
                ->route('platform.banner.list')
                ->title('Content'),

            Menu::make('Posts')
                ->icon('book-open')
                ->list([
                    Menu::make('All Posts')->route('platform.post.list'),
                    Menu::make('Categories')->route('platform.category.list', ['type' => 'post']),
                ]),

            Menu::make('Products')
                ->icon('dropbox')
                ->list([
                    Menu::make('All Products')->route('platform.product.list'),
                    Menu::make('Categories')->route('platform.category.list', ['type' => 'product']),
                    Menu::make('TVCs')->route('platform.tvc.list'),
                ]),

            Menu::make('Investors')
                ->icon('briefcase')
                ->list([
                    Menu::make('All Investors')->route('platform.investor.list'),
                    Menu::make('Categories')->route('platform.category.list', ['type' => 'investor']),
                ]),


            Menu::make('Job List')
                ->icon('people')
                ->list([
                    Menu::make('All Positions')->route('platform.career.list'),
                    Menu::make('Categories')->route('platform.category.list', ['type' => 'career']),
                ])
                ->title('Careers'),

            // Menu::make('Dropdown menu')
            //     ->icon('code')
            //     ->list([
            //         Menu::make('Sub element item 1')->icon('bag'),
            //         Menu::make('Sub element item 2')->icon('heart'),
            //     ]),

            // Menu::make('Basic Elements')
            //     ->title('Form controls')
            //     ->icon('note')
            //     ->route('platform.example.fields'),

            // Menu::make('Advanced Elements')
            //     ->icon('briefcase')
            //     ->route('platform.example.advanced'),

            // Menu::make('Text Editors')
            //     ->icon('list')
            //     ->route('platform.example.editors'),

            // Menu::make('Overview layouts')
            //     ->title('Layouts')
            //     ->icon('layers')
            //     ->route('platform.example.layouts'),

            // Menu::make('Chart tools')
            //     ->icon('bar-chart')
            //     ->route('platform.example.charts'),

            // Menu::make('Cards')
            //     ->icon('grid')
            //     ->route('platform.example.cards')
            //     ->divider(),

            // Menu::make('Documentation')
            //     ->title('Docs')
            //     ->icon('docs')
            //     ->url('https://orchid.software/en/docs'),

            // Menu::make('Changelog')
            //     ->icon('shuffle')
            //     ->url('https://github.com/orchidsoftware/platform/blob/master/CHANGELOG.md')
            //     ->target('_blank')
            //     ->badge(function () {
            //         return Dashboard::version();
            //     }, Color::DARK()),

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

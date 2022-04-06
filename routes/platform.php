<?php

declare(strict_types=1);

use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use App\Orchid\Screens\Post\PostListScreen;
use App\Orchid\Screens\Post\PostEditScreen;
use App\Orchid\Screens\Category\CategoryListScreen;
use App\Orchid\Screens\Category\CategoryEditScreen;
use App\Orchid\Screens\Banner\BannerListScreen;
use App\Orchid\Screens\Banner\BannerEditScreen;
use App\Orchid\Screens\Store\StoreListScreen;
use App\Orchid\Screens\Store\StoreEditScreen;
use App\Orchid\Screens\Contact\ContactListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\Backend\ExporterController;


/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Banners
Route::screen('banners', BannerListScreen::class)
    ->name('platform.banner.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->push(__('Banners'), route('platform.banner.list'));
    });

Route::screen('banner/{banner?}', BannerEditScreen::class)
    ->name('platform.banner.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.banner.list')
            ->push(__('Banner'));
    });

// Platform > Post
Route::screen('posts', PostListScreen::class)
    ->name('platform.post.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->push(__('Posts'), route('platform.post.list'));
    });

Route::screen('post/{post?}', PostEditScreen::class)
    ->name('platform.post.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.post.list')
            ->push(__('Post'));
    });

// Platform > Category
Route::screen('categories/{type}', CategoryListScreen::class)
    ->name('platform.category.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->push(__('Categories'));
    });

Route::screen('category/{category?}', CategoryEditScreen::class)
    ->name('platform.category.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->push(__('Category'));
    })
    ;

// Platform > Store
Route::screen('stores', StoreListScreen::class)
    ->name('platform.store.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->push(__('Locations'), route('platform.store.list'));
    });

Route::screen('store/{store?}', StoreEditScreen::class)
    ->name('platform.store.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.store.list')
            ->push(__('Location'));
    });

// Platform > Contact
Route::screen('contacts', ContactListScreen::class)
    ->name('platform.contact.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->push(__('Contacts'), route('platform.contact.list'));
    });

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->push(__('Profile'), route('platform.profile'));
    });

// Platform > System > Users
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit');

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.users')
            ->push(__('Create'), route('platform.systems.users.create'));
    });

// Platform > System > Users > User
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->push(__('Users'), route('platform.systems.users'));
    });

// Platform > System > Roles > Role
Route::screen('roles/{roles}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(function (Trail $trail, $role) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Role'), route('platform.systems.roles.edit', $role));
    });

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.systems.roles')
            ->push(__('Create'), route('platform.systems.roles.create'));
    });

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->push(__('Roles'), route('platform.systems.roles'));
    });

Route::get('admin/contact-export', [ExporterController::class, 'exportContact'])
    ->name('contact-export');

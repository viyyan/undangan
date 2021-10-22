<?php

declare(strict_types=1);

use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
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
use App\Orchid\Screens\Product\ProductListScreen;
use App\Orchid\Screens\Product\ProductEditScreen;
use App\Orchid\Screens\ProductVariant\VariantEditScreen;
use App\Orchid\Screens\Tvc\TvcListScreen;
use App\Orchid\Screens\Tvc\TvcEditScreen;
use App\Orchid\Screens\Investor\InvestorListScreen;
use App\Orchid\Screens\Investor\InvestorEditScreen;
use App\Orchid\Screens\Career\CareerListScreen;
use App\Orchid\Screens\Career\CareerEditScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;


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
Route::screen('categories', CategoryListScreen::class)
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

// Platform > Product
Route::screen('products', ProductListScreen::class)
    ->name('platform.product.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->push(__('Products'), route('platform.product.list'));
    });

Route::screen('product/{product?}', ProductEditScreen::class)
    ->name('platform.product.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.product.list')
            ->push(__('Product'));
    });

// Platform > Product > Variant
Route::screen('variant/{variant?}', VariantEditScreen::class)
    ->name('platform.variant.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.product.edit')
            ->push(__('Product Variant'));
    });

// Platform > Product > Tvc
Route::screen('tvcs', TvcListScreen::class)
    ->name('platform.tvc.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->push(__('TVCs'), route('platform.tvc.list'));
    });

Route::screen('tvc/{tvc?}', TvcEditScreen::class)
    ->name('platform.tvc.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.tvc.list')
            ->push(__('TVC'));
    });

// Platform > Investor
Route::screen('investors', InvestorListScreen::class)
    ->name('platform.investor.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
        ->push(__('Investors'), route('platform.investor.list'));
    });

Route::screen('investor/{investor?}', InvestorEditScreen::class)
    ->name('platform.investor.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
        ->parent('platform.investor.list')
        ->push('Investor');
            
    });

// Platform > Career
Route::screen('careers', CareerListScreen::class)
    ->name('platform.career.list')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->push(__('Careers'), route('platform.career.list'));
    });

Route::screen('career/{career?}', CareerEditScreen::class)
    ->name('platform.career.edit')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.career.list')
            ->push(__('Career'));
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
            ->parent('platform.index')
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
            ->parent('platform.index')
            ->push(__('Roles'), route('platform.systems.roles'));
    });

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Example screen'));
    });

Route::screen('example-fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('example-layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('example-charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('example-editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('example-cards', ExampleCardsScreen::class)->name('platform.example.cards');
Route::screen('example-advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');

//Route::screen('idea', 'Idea::class','platform.screens.idea');

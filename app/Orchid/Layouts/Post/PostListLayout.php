<?php

namespace App\Orchid\Layouts\Post;

use App\Models\Post;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class PostListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'posts';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title', 'Title')
                ->render(function (Post $post) {
                    return Link::make($post->title)
                        ->route('platform.post.edit', $post);
                }),

            TD::make('category_id', 'Category')
                ->render(function (Post $post) {
                    return $post->category->name;
                }),

            TD::make('author_id', 'Author')
                ->render(function (Post $post) {
                    return $post->author->name;
                }),

            TD::make('status', 'Status')
                ->render(function (Post $post) {
                    return ($post->status == 1) ? "Publish" : "Draft";
                }),

            TD::make('created_at', 'Date')
                ->render(function (Post $post) {
                    return $post->created_at->format('d F Y');
                }),
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use App\Helpers\Template;
use App\Models\Category;


class Member extends Model
{
    use AsSource, Attachable, Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'photo_id',
        'title',
        'quote',
        'linkedin_url',
        'category_id',
        'order',
        'status'
    ];


    /**
     * Name of columns to which http sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'name',
        'order',
        'created_at',
        'updated_at'
    ];

    /**
     * Get hero for the post.
     */
    public function photo()
    {
        return $this->belongsTo(Attachment::class, 'photo_id');
    }

    /**
     * Get hero imageUrl for the post.
     */
    public function photoUrl()
    {
        $image = $this->photo()->first();
        return !empty($image) ? $image->url() : frontImages('dummy-ava.png');
    }

    /**
     * Get category for the post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

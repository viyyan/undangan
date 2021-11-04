<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use App\Helpers\Template;
use App\Models\Category;
use App\Models\User;


class CaseStudy extends Model
{
    use Sluggable, SluggableScopeHelpers, AsSource, Attachable, Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'sub_title_1',
        'sub_title_2',
        'sub_title_3',
        'sub_content_1',
        'sub_content_2',
        'sub_content_3',
        'author_id',
        'category_id',
        'hero_id',
        'status',
        'featured',
        'created_at'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Name of columns to which http sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'title',
        'created_at',
        'updated_at'
    ];

    /**
     * Get hero for the post.
     */
    public function heroImage()
    {
        return $this->belongsTo(Attachment::class, 'hero_id');
    }

    /**
     * Get hero imageUrl for the post.
     */
    public function heroUrl($size = '1000x610')
    {
        $image = $this->heroImage()->first();
        return !empty($image) ? $image->url() : "https://via.placeholder.com/${size}.png?text=taisho.co.id";
    }


    /**
     * Get hero heroThumbPath for the post.
     */
    public function heroThumbPath()
    {
        if ($image = $this->heroImage()->first()) {
            return "public/".$image->path.$image->name."_thumb.".$image->extension;
        } else {
            return null;
        }
    }

    /**
     * Get hero heroThumbUrl for the post.
     */
    public function heroThumbUrl($size = '530x610')
    {
        if ($image = $this->heroImage()->first()) {
            return dirname($image->url())."/".$image->name."_thumb.".$image->extension;
        } else {
            return "https://via.placeholder.com/${size}.png?text=taisho.co.id";
        }
    }



    /**
     * Get category for the post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get category for the post.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Total exhibitors
     */
    public function getFrontendExcerptAttribute()
    {
        if (empty($this->excerpt)) {
            if (empty($this->sub_content_1)) return "";
            return excerptLimit(strip_tags($this->sub_content_1), 300);
        }
        return $this->sub_content_1;
    }
}

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
use App\Models\ProductVariant;
use App\Models\Tvc;
use App\Models\Category;

class Product extends Model
{
    use Sluggable, SluggableScopeHelpers, AsSource, Attachable, Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'subtitle',
        'desc',
        'hero_id',
        'image_id',
        'is_halal',
        'category_id',
        'status',
        'tvc_ids',
        'facebook_name',
        'facebook_url',
        'instagram_name',
        'instagram_url',
        'highlight',
        'order',
    ];

    protected $casts = [
        'tvc_ids' => 'array'
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
                'source' => 'name'
            ]
        ];
    }

     /**
     * Name of columns to which http sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'name',
        'created_at',
        'updated_at'
    ];

    /**
     * Get hero for the post.
     */
    public function hero()
    {
        return $this->belongsTo(Attachment::class, 'hero_id');
    }

    /**
     * Get hero imageUrl for the post.
     */
    public function heroUrl($size = '1000x610')
    {
        $image = $this->hero()->first();
        return !empty($image) ? $image->url() : frontImage('dummy/product/counterpain.jpeg');
        // "https://via.placeholder.com/${size}.png?text=taisho.co.id";
    }

    /**
     * Get image for the product.
     */
    public function image()
    {
        return $this->belongsTo(Attachment::class, 'image_id');
    }

    /**
     * Get hero imageUrl for the post.
     */
    public function imageUrl($size = '420x304')
    {
        $image = $this->image()->first();
        return !empty($image) ? $image->url() : "https://via.placeholder.com/${size}.png?text=taisho.co.id";
    }

    /**
     * Get category for the post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * Get variants for the product.
     */
    public function variants()
    {
        return $this->hasMany(ProductVariant::class)->orderBy('order', 'asc');
    }

    /**
     * Get tvc for the post.
     */
    public function getTvcsAttribute()
    {
        return Tvc::whereIn("id", $this->tvc_ids)->get();
    }
}

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

class ProductVariant extends Model
{
    use AsSource, Attachable, Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'product_id',
        'image_id',
        'subtitle',
        'desc',
        'category',
        'packaging',
        'composition',
        'dose_usage',
        'note',
        'order',
    ];

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
     * Get image for the productVariant.
     */
    public function image()
    {
        return $this->belongsTo(Attachment::class, 'image_id');
    }

    /**
     * Get hero imageUrl for the post.
     */
    public function imageUrl($size = '420x420')
    {
        $image = $this->image()->first();
        return !empty($image) ? $image->url() : "https://via.placeholder.com/${size}.png?text=taisho.co.id";
    }
}

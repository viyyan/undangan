<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;


class Category extends Model
{
    use Sluggable, SluggableScopeHelpers, AsSource, Filterable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'status',
        'type',
        'order'
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
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopePost(Builder $query)
    {
        return $query->where('type', 'post');
    }

    /**
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeProduct(Builder $query)
    {
        return $query->where('type', 'product');
    }


    /**
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeInvestor(Builder $query)
    {
        return $query->where('type', 'investor');
    }

    /**
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeCareer(Builder $query)
    {
        return $query->where('type', 'career');
    }

    public function products()
    {
        return $this->hasMany(Product::class)->orderBy('order', 'asc');
    }

}


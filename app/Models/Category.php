<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Builder;


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
        'order',
        'quiz_answers'
    ];


    // cast to array
    protected $casts = [
        'quiz_answers' => 'array'
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
    public function scopeMember(Builder $query)
    {
        return $query->where('type', 'member');
    }

    /**
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeIndustry(Builder $query)
    {
        return $query->where('type', 'industry');
    }

    /**
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeResearch(Builder $query)
    {
        return $query->where('type', 'research');
    }

}


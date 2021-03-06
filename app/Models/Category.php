<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Builder;
use App\Models\CaseStudy;


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
        'quiz_answers',
        'color'
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
    public function sluggable(): array
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

    protected $allowedFilters = [
        'name',
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

    public function cases()
    {
        return CaseStudy::all()->filter(function($case) {
            return in_array($this->id, $case->cat_research_ids) ? $case : null;
        });
    }
}


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
        'cat_industry_id',
        'cat_research_ids',
        'objective',
        'approach',
        'result',
        'recommendation',
        'tools',
        'hero_id',
        'status',
        'featured',
        'created_at'
    ];

    protected $casts = [
        'cat_research_ids' => 'array'
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
        return !empty($image) ? $image->url() : "https://via.placeholder.com/${size}.png?text=clove-research.com";
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
            return "https://via.placeholder.com/${size}.png?text=clove-research.com";
        }
    }



    /**
     * Get category for the case study
     */
    public function industry()
    {
        return $this->belongsTo(Category::class, 'cat_industry_id');
    }

    /**
     * Get researches for the case study
     */
    public function getResearchesAttribute()
    {
        $cat_research_ids = (isset($this->cat_research_ids)) ? $this->cat_research_ids : [];
        return Category::whereIn("id", $cat_research_ids)->get();
    }


    public function getResearchesStrAttribute()
    {
        $researches = '';
        foreach($this->researches as $key=>$research) {
            if ($key > 0) $researches .= ", ";
            $researches .= $research->name;
        }
        return $researches;
    }
}

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

class Investor extends Model
{
    use Sluggable, SluggableScopeHelpers, AsSource, Attachable, Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'pdf_id',
        'group_year',
        'category_id',
        'created_at',
        'status',
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
    public function pdfFile()
    {
        return $this->hasOne(Attachment::class, 'id', 'pdf_id')->withDefault();
    }

    /**
     * Get pdf fileUrl for the post.
     */
    public function pdfFileUrl()
    {
        $pdf = $this->pdfFile()->first();
        return !empty($pdf) ? $pdf->url() : null;
    }

    /**
     * Get hero imageUrl for the post.
     */
    public function hasPdf()
    {
        $pdf = $this->pdfFile()->first();
        return !empty($pdf);
    }

    /**
     * Get category for the post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * Total exhibitors
     */
    public function getFrontendExcerptAttribute()
    {
        if (isset($this->content)) {
            $content = strip_tags($this->content);
            $string = str_replace('&nbsp;', ' ', $content); 
            return excerptLimit($string, 300);
        }
        return "";
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use App\Models\QuizOption;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Screen\AsSource;


class Quiz extends Model
{
    use Filterable, AsSource, Attachable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question',
        'order',
        'status',
        'type',
        'decor_image_id',
        'is_check_prev'
    ];

     /**
     * Name of columns to which http sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'question',
        'order',
        'status',
        'created_at',
        'updated_at'
    ];


    /**
     * Get variants for the product.
     */
    public function options()
    {
        return $this->hasMany(QuizOption::class)->orderBy('code', 'asc');
    }

    /**
     * Get hero for the post.
     */
    public function decorImage()
    {
        return $this->belongsTo(Attachment::class, 'decor_image_id');
    }

    /**
     * Get hero imageUrl for the post.
     */
    public function decorImageUrl()
    {
        $image = $this->decorImage()->first();
        return !empty($image) ? $image->url() : null;
    }

}

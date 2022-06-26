<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use App\Helpers\Template;
use App\Models\User;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;

class Event extends Model
{
    use Sluggable, SluggableScopeHelpers,  AsSource, Attachable, Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'hero_id',
        'sub_hero_id',
        'bride',
        'groom',
        'bride_desc',
        'groom_desc',
        'event_date',
        'venue',
        'venue_address',
        'city',
        'latitude',
        'longitude',
        'status',
        'type'
    ];

     /**
     * Get category for the post.
     */
    public function client()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

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
}

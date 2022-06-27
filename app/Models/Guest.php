<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use App\Helpers\Template;

class Guest extends Model
{
    use Sluggable, SluggableScopeHelpers, Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'name',
        'slug',
        'phone',
        'email',
        'confirmed',
        'type',
        'address',
        'city',
        'total_guests'
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
     * Get category for the post.
     */
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}

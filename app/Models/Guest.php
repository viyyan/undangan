<?php

namespace App\Models;

use Orchid\Filters\Filterable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use App\Helpers\Template;

class Guest extends Model
{
    use Sluggable, SluggableScopeHelpers, Filterable;


    $table->bigInteger('event_id');
    $table->string('name');
    $table->string('slug');
    $table->string('phone')->nullable();
    $table->string('email')->nullable();
    $table->boolean('confirmed')->nullable();
    $table->bigInteger('total_guests')->nullable();
    $table->bigInteger('type');
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
        'type'
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
}

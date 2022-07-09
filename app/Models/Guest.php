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
        'total_guests',
        'from',
        'status',
    ];

    protected $allowedFilters = [
        'confirmed',
        'type',
        'address',
        'city',
        'total_guests',
        'from',
        'status',
        'updated_at'
    ];

    protected $allowedSorts = [
        'confirmed',
        'type',
        'address',
        'city',
        'total_guests',
        'from',
        'status',
        'updated_at'
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

       /**
     * Get category for the post.
     */
    public function typeText()
    {
        switch ($this->type) {
            case 1:
                $txt = 'Invitees';
                break;
            case 1:
                $txt = "Friends Gift";
                break;
            case 2:
                $txt = "Colleague";
                break;
        }
        return $txt;
    }

       /**
     * Get category for the post.
     */
    public function confirmedText()
    {
        $notComing = ($this->status == 3) ? "No" : "Waiting";
        if ($this->type != 1) return "-";
        return $this->confirmed ? "Yes" : $notComing;
    }


    public function statusText()
    {
        switch ($this->status) {
            case 1:
                $txt = 'Created';
                break;
            case 2:
                $txt = "Sent";
                break;
            case 3:
                $txt = "Submited";
                break;
        }
        return $txt;
    }
}

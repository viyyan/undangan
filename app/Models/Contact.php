<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;

class Contact extends Model
{
    use HasFactory, Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'message',
        'file',
    ];

    /**
     * Name of columns to which http sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'name',
        'updated_at'
    ];

    protected $allowedFilters = [
        'name',
    ];

    public function getAttachedFile()
    {
        if ($this->file != null) {
            return frontAssets("contact_attachment/".$this->file);
        } else {
            return null;
        }
    }


}

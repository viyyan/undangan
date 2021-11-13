<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use App\Models\QuizOptionChild;


class QuizOption extends Model
{
    use Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'quiz_id',
        'code',
        'sub_options',
        'status',
    ];

    // cast to array
    protected $casts = [
        'sub_options' => 'array'
    ];

     /**
     * Name of columns to which http sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'question',
        'code',
        'status',
        'created_at',
        'updated_at'
    ];


    /**
     * Get children for the option.
     */
    public function optionChilds()
    {
        return $this->hasMany(QuizOptionChild::class)->orderBy('code', 'asc');
    }


    //Add extra attribute
    protected $attributes = ['has_children'];

    //Make it available in the json response
    protected $appends = ['has_children'];

    /**
     * Get children for the product.
     */
    public function getHasChildrenAttribute()
    {
        return $this->optionChilds()->exists();
    }

}

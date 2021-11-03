<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use App\Models\QuizOption;


class Quiz extends Model
{
    use Filterable;

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

}

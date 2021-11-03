<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;


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


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use App\Models\QuizOption;


class QuizOptionChild extends Model
{
    use Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'quiz_option_id',
        'code',
        // 'sub_options',
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
     * Get hero for the post.
     */
    public function parent()
    {
        return $this->belongsTo(QuizOption::class, 'quiz_option_id');
    }

}

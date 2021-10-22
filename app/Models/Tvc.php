<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;

class Tvc extends Model
{
    use Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'subtitle',
        'desc',
        'youtube_id',
        'status',
        'highlight',
    ];


    /**
     * Name of columns to which http sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'title',
        'created_at',
        'updated_at'
    ];


    /**
     * Get youtubeUrl for the post.
     */
    public function getYoutubeUrlAttribute()
    {
        return isset($this->youtube_id) ? "https://www.youtube.com/watch?v=".$this->youtube_id : null;
    }

    /**
     * Get youtubeEmbedUrl for the post.
     */
    public function getYoutubeEmbedUrlAttribute()
    {
        return isset($this->youtube_id) ? "https://www.youtube.com/embed/".$this->youtube_id : null;
    }

    /**
     * Get youtubeEmbedUrl for the post.
     */
    public function getYoutubeThumbUrlAttribute($size = 'maxresdefault')
    {
        if ($size == 'small') {
            $size = 'sddefault';
        } elseif ($size == 'medium') {
            $size = 'mqdefault';
        } else {
            $size = 'maxresdefault';
        }
        return isset($this->youtube_id) ? 'http://i3.ytimg.com/vi/'.$this->youtube_id.'/'.$size.'.jpg' : null;
    }
}

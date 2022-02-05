<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use App\Models\BannerLang;
use LaravelLocalization;


class Banner extends Model
{
    use Attachable, AsSource, Filterable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'subtitle',
        'hero_id',
        'status',
        'order',
        'url'
    ];


    /**
     * Name of columns to which http sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'name',
        'order',
        'status'
    ];


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
    public function heroUrl($size = '1280x740')
    {
        $image = $this->heroImage()->first();
        return !empty($image) ? $image->url() : "https://via.placeholder.com/${size}.png?text=taisho.co.id";
    }


    /**
     * Get hero translation for the baner.
     */
    public function translation()
    {
        return $this->hasOne(BannerLang::class, 'banner_id')->latest();
    }


    /**
     * Get current content by lang
     */
    public function localeContent()
    {
        $lang =  LaravelLocalization::getCurrentLocale();
        $content = $this->hasMany(BannerLang::class, 'banner_id')->where('lang', $lang)->first();
        if (!$content) {
            $content = $this->toArray();
        }
        return $content;
    }

    /**
     * Get current content by lang
     */
    public function currentContent($name, $default = '')
    {
        $value = $default;
        $content = $this->localeContent();
        if ($content) {
            if (!empty($content[$name])) {
                $value = $content[$name];
            }
        }
        return $value;
    }
}

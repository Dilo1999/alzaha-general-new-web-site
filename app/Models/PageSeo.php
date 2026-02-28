<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSeo extends Model
{
    protected $fillable = [
        'route_name',
        'page_label',
        'meta_title',
        'meta_description',
        'og_title',
        'og_description',
        'og_image',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'canonical_url',
        'robots',
    ];

    public static function forRoute(string $routeName): ?self
    {
        return static::where('route_name', $routeName)->first();
    }

    public function getOgImageUrlAttribute(): ?string
    {
        if (empty($this->og_image)) {
            return null;
        }
        if (str_starts_with($this->og_image, 'http')) {
            return $this->og_image;
        }

        return asset('storage/'.ltrim($this->og_image, '/'));
    }

    public function getTwitterImageUrlAttribute(): ?string
    {
        if (empty($this->twitter_image)) {
            return null;
        }
        if (str_starts_with($this->twitter_image, 'http')) {
            return $this->twitter_image;
        }

        return asset('storage/'.ltrim($this->twitter_image, '/'));
    }
}
